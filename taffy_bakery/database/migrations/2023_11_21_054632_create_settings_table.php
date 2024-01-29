<?php

use App\Models\Settings;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        Settings::create ([
            'key' => '_site_name',
            'label' => 'judul_situs',
            'value' => 'Taffy`s Bakery',
            'type' => 'text',
        ]);

        Settings::create ([
            'key' => '_location',
            'label' => 'Alamat',
            'value' => 'Taman Alamanda 2 Blok EE3 No.15',
            'type' => 'text',
        ]);

        Settings::create ([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.instagram.com/toffee.i',
            'type' => 'text',
        ]);

        settings::create ([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'https://www.youtube.com/channel/UCv3iN_uCxJsbwGtUBEjnnKw',
            'type' => 'text',
        ]);

        settings::create ([
            'key' => '_tumblr',
            'label' => 'Tumblr',
            'value' => 'https://www.tumblr.com/eclairsaretasty',
            'type' => 'text',
        ]);

        settings::create ([
            'key' => '_site_description',
            'label' => 'Description Web',
            'value' => 'Ini adalah project website pertama ku yang menggunakan framework laravel dan bootstrap',
            'type' => 'text',
        ]);

        settings::create ([
            'key' => '_whatsapp',
            'label' => 'Whatsapp',
            'value' => 'https://wa.me//6281290220374?text=Hello!%20I%20would%20like%20to%20order',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
