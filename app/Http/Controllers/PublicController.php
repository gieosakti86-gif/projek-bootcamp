<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicController extends Controller
{
    /**
     * Menampilkan daftar link yang aktif.
     */
    public function index(): View
    {
        $links = Link::where('is_active', true)
            ->latest()
            ->paginate(5);

        return view('public.index', compact('links'));
    }

    /**
     * Redirect ke URL tujuan dan menambah jumlah klik.
     */
    public function redirect(Link $link): RedirectResponse
    {
        // Tambah jumlah klik
        $link->increment('clicks');

        // Redirect ke URL
        return redirect()->away($link->url);
    }
}
