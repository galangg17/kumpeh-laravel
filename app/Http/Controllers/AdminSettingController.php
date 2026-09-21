<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    public function index()
    {
        $settings = SiteSetting::all()->pluck('value', 'key')->toArray();
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $inputs = $request->except(['_token', '_method']);

        // Handle file uploads (e.g. hero_image_file, site_logo_file)
        if ($request->hasFile('hero_image_file')) {
            $path = $request->file('hero_image_file')->store('settings', 'public');
            SiteSetting::set('hero_image', '/storage/' . $path, 'hero');
        }

        if ($request->hasFile('site_logo_file')) {
            $path = $request->file('site_logo_file')->store('settings', 'public');
            SiteSetting::set('site_logo', '/storage/' . $path, 'branding');
        }

        foreach ($inputs as $key => $value) {
            if (in_array($key, ['hero_image_file', 'site_logo_file'])) {
                continue;
            }

            // Determine group based on key prefix
            $group = 'general';
            if (str_starts_with($key, 'hero_')) {
                $group = 'hero';
            } elseif (str_starts_with($key, 'announcement_')) {
                $group = 'announcement';
            } elseif (str_starts_with($key, 'legal_')) {
                $group = 'legalities';
            } elseif (str_starts_with($key, 'sop_')) {
                $group = 'sops';
            } elseif (str_starts_with($key, 'contact_') || str_starts_with($key, 'site_')) {
                $group = 'branding';
            }

            SiteSetting::set($key, $value ?? '', $group);
        }

        return redirect()->route('admin.settings.index')->with('success', 'Pengaturan website berhasil diperbarui!');
    }
}
