<?php

namespace App\Filament\Resources\HomeResource\Pages;

use App\Filament\Resources\HomeResource;
use App\Models\Home;
use App\Models\Project;
use App\Models\Contact;
use App\Models\Work;
use App\Models\Address;
use App\Models\Education;
use App\Models\Skill;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditHome extends EditRecord
{
    protected static string $resource = HomeResource::class;

    protected function getActions(): array
    {
        return [
          
        ];
    }



    public function show() {
    $home = Home::find(1); // Mengambil data home dengan ID 1
    $projects = Project::all(); // Mengambil semua data project
    $contact = Contact::find(1);
    $works = Work::all();
    $address = Address::find(1);
    $educations = Education::all();
    $skills = Skill::all();

    // Mengirim data ke view
     return view('welcome', compact('home', 'projects','contact','works','address','educations','skills'));
    //return view('welcome', ['home' => $home]);
}




}
