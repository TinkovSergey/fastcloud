<?php

namespace App\Livewire\Marketing;

use App\Livewire\Component;
use App\Models\Category;

class Locations extends Component
{
    public function render()
    {
        $locations = $this->getLocations();

        return view('marketing.locations', [
            'title' => 'Локации',
            'locations' => $locations,
        ]);
    }

    private function getLocations()
    {
        $categories = Category::whereNull('parent_id')
            ->orderBy('sort', 'asc')
            ->get();

        $locations = [];

        foreach ($categories as $category) {
            $raw = $category->description;

            // Убираем HTML-теги и декодируем HTML-сущности (&quot; -> ")
            $clean = html_entity_decode(strip_tags($raw), ENT_QUOTES | ENT_HTML5);

            // Убираем BOM и управляющие символы, не трогая UTF-8 (эмодзи, кириллицу)
            $clean = preg_replace('/[\x00-\x08\x0B\x0C\x0E-\x1F\x7F]/', '', $clean);

            // Дополнительная очистка от мусора
            $clean = trim($clean);

            $data = json_decode($clean, true);

            if (json_last_error() !== JSON_ERROR_NONE || !isset($data['region'])) {
                // Логируем ошибку для отладки
                \Log::error("JSON decode error for category {$category->id}: " . json_last_error_msg());
                \Log::error("Cleaned string: " . $clean);
                continue;
            }

            $region = $data['region'];
            if (!isset($locations[$region])) {
                $locations[$region] = [
                    'label' => $data['region_label'] ?? $region,
                    'locations' => []
                ];
            }

            $locations[$region]['locations'][] = [
                'id' => $category->id,
                'name' => $category->name,
                'flag' => $data['flag'] ?? '🏳️',
                'code' => $data['code'] ?? 'N/A',
                'city' => $data['city'] ?? 'N/A',
                'online' => $data['online'] ?? false,
                'network' => $data['network'] ?? '—',
                'storage' => $data['storage'] ?? '—',
                'ddos' => $data['ddos'] ?? '—',
                'uptime' => $data['uptime'] ?? '—',
                'slug' => $category->slug,
            ];
        }

        return $locations;
    }
}
