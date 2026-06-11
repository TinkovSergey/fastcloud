<?php

namespace App\Livewire\Marketing;

use App\Livewire\Component;
use App\Models\Category;

class Pricing extends Component
{
    public function render()
    {
        $currency = session('currency', config('settings.default_currency'));

        $categories = Category::whereNull('parent_id')
            ->with([
                'products' => fn($q) => $q->orderBy('sort')->with([
                    'settings',
                    'plans' => fn($q) => $q->orderBy('sort')->with([
                        'prices' => fn($q) => $q->where('currency_code', $currency),
                    ]),
                ]),
            ])
            ->orderBy('id')
            ->get();

        $currencyModel = \App\Models\Currency::find($currency);
        $symbol  = $currencyModel?->suffix ?? ($currencyModel?->prefix ?? $currency);
        $isAfter = !empty($currencyModel?->suffix);

        $locationsList = [];
        $locationData  = [];

        foreach ($categories as $cat) {
            $locationsList[] = ['slug' => $cat->slug, 'name' => $cat->name];

            $products = [];
            $middleIndex = (int) floor(($cat->products->count() - 1) / 2);
            foreach ($cat->products as $_prodIdx => $product) {
                $settings = $product->settings->pluck('value', 'key');

                $prices   = [];
                $plan_ids = [];
                foreach ($product->plans as $plan) {
                    $raw = $plan->prices->first()?->price ?? null;
                    if ($raw === null) continue;

                    if ($plan->billing_unit === 'month') {
                        if ($plan->billing_period === 1)      $key = 'monthly';
                        elseif ($plan->billing_period === 3)  $key = 'quarterly';
                        elseif ($plan->billing_period === 6)  $key = 'biannual';
                        elseif ($plan->billing_period === 12) $key = 'annual';
                        else continue;
                    } elseif ($plan->billing_unit === 'year' && $plan->billing_period === 1) {
                        $key = 'annual';
                    } else {
                        continue;
                    }

                    $prices[$key]   = (float) $raw;
                    $plan_ids[$key] = $plan->id;
                }

                $baseUrl = route('products.checkout', [
                    'category' => $cat->slug,
                    'product'  => $product->slug,
                ]);

                $products[] = [
                    'name'         => $product->name,
                    'slug'         => $product->slug,
                    'cat_slug'     => $cat->slug,
                    'cpu'          => $settings['cores']  ?? '—',
                    'ram'          => $settings['memory'] ?? '—',
                    'nvme'         => $settings['disk']   ?? '—',
                    'traffic'      => $settings['traffic'] ?? '—',
                    'featured'     => $_prodIdx === $middleIndex,
                    'checkout_base'=> $baseUrl,
                    'plan_ids'     => $plan_ids,
                    'prices'       => $prices,
                ];
            }

            $locationData[$cat->slug] = $products;
        }

        return view('marketing.pricing', [
            'title'         => 'Тарифы',
            'locationsList' => $locationsList,
            'locationData'  => $locationData,
            'currencySymbol'=> $symbol,
            'symbolAfter'   => $isAfter,
        ]);
    }
}
