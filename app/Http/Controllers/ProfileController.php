<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProfileRequest;
use App\Models\Profile\Contact;
use App\Models\Profile\Education;
use App\Models\Profile\Experience;
use App\Models\Profile\Interest;
use App\Models\Profile\Language;
use App\Models\Profile\Skills;
use App\Models\Profile\Urls;
use App\Models\Profile\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function profileView(){
        $idUser = Auth::user()->id;
        $userProfile = UserProfile::where('user_id', '=', strval($idUser))->get();
        $contact = Contact::where('user_id', '=', strval($idUser))->get();
        $education = Education::where('user_id', '=', strval($idUser))->get();
        $experience = Experience::where('user_id', '=', strval($idUser))->get();
        $skills = Skills::where('user_id', '=', strval($idUser))->get();
        $language = Language::where('user_id', '=', strval($idUser))->get();
        $interest = Interest::where('user_id', '=', strval($idUser))->get();
        $urls = Urls::where('user_id', '=', strval($idUser))->get();

        return [
            'userProfile' => $userProfile,
            'contactProfile' => $contact,
            'educationProfile' => $education,
            'experienceProfile' => $experience,
            'skillsProfile' => $skills,
            'languageProfile' => $language,
            'interestProfile' => $interest,
            'urlsProfile' => $urls,
            'existProfile' => 1
        ];
    }

    public function index(){
        $roleUser = Auth::user()->role;
        if ($roleUser === 'talent') {
            return view('profile.index', $this->profileView());
        }
    }

    public function create(){
        return view('profile.create', [
            'userProfile' => new UserProfile,
            'contactProfile' => new Contact,
            'educationProfile' => new Education,
            'experienceProfile' => new Experience,
            'skillsProfile' => new Skills,
            'languageProfile' => new Language,
            'interestProfile' => new Interest,
            'urlsProfile' => new Urls,
            'existProfile' => 0
        ]);
    }

    public function store(Request $request){

        // Obtén el ID del usuario autenticado
        $userId = auth()->id();

        UserProfile::create([
            'user_id' => $userId,
            'name' => $request->input('name'),
            'surnames' => $request->input('surnames'),
            'profession' => $request->input('profession'),
        ]);

        Urls::create([
            'user_id' => $userId,
            'url_linkedIn' => $request->input('url_linkedIn')
        ]);

        Contact::create([
            'user_id' => $userId,
            'location' => $request->input('location'),
            'zip_code' => $request->input('zip_code'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email')
        ]);

        Skills::create([
            'user_id' => $userId,
            'programming_language' => $request->input('programming_language'),
            'programming_language_2' => $request->input('programming_language_2'),
            'programming_language_3' => $request->input('programming_language_3'),
            'programming_language_4' => $request->input('programming_language_4'),
            'programming_language_5' => $request->input('programming_language_5'),
            'framework' => $request->input('framwork'),
            'framework_2' => $request->input('framework_2'),
            'framework_3' => $request->input('framework_3'),
            'framework_4' => $request->input('framework_4'),
            'framework_5' => $request->input('framework_5'),
            'markup_language' => $request->input('markup_language'),
            'markup_language_2' => $request->input('markup_language_2'),
            'markup_language_3' => $request->input('markup_language_3'),
            'markup_language_4' => $request->input('markup_language_4'),
            'markup_language_5' => $request->input('markup_language_5'),
            'database' => $request->input('database'),
            'database_2' => $request->input('database_2'),
            'database_3' => $request->input('database_3'),
            'database_4' => $request->input('database_4'),
            'database_5' => $request->input('database_5'),
            'control_version' => $request->input('control_version'),
            'control_version_2' => $request->input('control_version_2'),
            'control_version_3' => $request->input('control_version_3'),
            'control_version_4' => $request->input('control_version_4'),
            'control_version_5' => $request->input('control_version_5'),
            'other' => $request->input('other'),
            'other_2' => $request->input('other_2'),
            'other_3' => $request->input('other_3'),
            'other_4' => $request->input('other_4'),
            'other_5' => $request->input('other_5')
        ]);

        foreach ($request->all() as $key => $value) {
            if ($key==='title') {
                Education::create([
                    'user_id' => $userId,
                    'title' => $request->input("title"),
                    'name_title' => $request->input("name_title"),
                    'start_year' => $request->input("start_year"),
                    'end_year' => $request->input("end_year"),
                    'location_academic' => $request->input("location_academic"),
                    'institution' => $request->input("institution")
                ]);
            }
            $numKey = preg_replace("/[^0-9]/", "", $key);
            if ($key==='title_'.$numKey) {
                Education::create([
                    'user_id' => $userId,
                    'title' => $request->input("title_{$numKey}"),
                    'name_title' => $request->input("name_title_{$numKey}"),
                    'start_year' => $request->input("start_year_{$numKey}"),
                    'end_year' => $request->input("end_year_{$numKey}"),
                    'location_academic' => $request->input("location_academic_{$numKey}"),
                    'institution' => $request->input("institution_{$numKey}")
                ]);
            } 
        }

        foreach ($request->all() as $key => $value) {
            if ($key==='name_company') {
                Experience::create([
                    'user_id' => $userId,
                    'name_company' => $request->input("name_company"),
                    'start_date' => $request->input("start_date"),
                    'end_date' => $request->input("end_date"),
                    'description_1' => $request->input("description_1"),
                    'description_2' => $request->input("description_2"),
                    'description_3' => $request->input("description_3"),
                    'description_4' => $request->input("description_4"),
                    'description_5' => $request->input("description_5")
                ]);
            }
            $numKey = preg_replace("/[^0-9]/", "", $key);
            if ($key==='name_company_'.$numKey) {
                Experience::create([
                    'user_id' => $userId,
                    'name_company' => $request->input("name_company_{$numKey}"),
                    'start_date' => $request->input("start_date_{$numKey}"),
                    'end_date' => $request->input("end_date_{$numKey}"),
                    'description_1' => $request->input("description_1_{$numKey}"),
                    'description_2' => $request->input("description_2_{$numKey}"),
                    'description_3' => $request->input("description_3_{$numKey}"),
                    'description_4' => $request->input("description_4_{$numKey}"),
                    'description_5' => $request->input("description_5_{$numKey}")
                ]);
            }
        }

        foreach ($request->all() as $key => $value) {
            if ($key==='interest') {
                Interest::create([
                    'user_id' => $userId,
                    'interest' => $request->input("interest")
                ]);
            }
            $numKey = preg_replace("/[^0-9]/", "", $key);
            if ($key==='interest_'.$numKey) {
                Interest::create([
                    'user_id' => $userId,
                    'interest' => $request->input("interest_{$numKey}")
                ]);
            }
        }

        foreach ($request->all() as $key => $value) {
            if ($key==='language') {
                Language::create([
                    'user_id' => $userId,
                    'language' => $request->input("language"),
                    'level' => $request->input("level"),
                    'title_language' => $request->input("title_language")
                ]);
            }
            $numKey = preg_replace("/[^0-9]/", "", $key);
            if ($key==='language_'.$numKey) {
                Language::create([
                    'user_id' => $userId,
                    'language' => $request->input("language_{$numKey}"),
                    'level' => $request->input("level_{$numKey}"),
                    'title_language' => $request->input("title_language_{$numKey}")
                ]);
            }
        }

        return redirect()->route('profile.index');

    }

    public function edit(){
        $roleUser = Auth::user()->role;
        if ($roleUser === 'talent') {
            return view('profile.edit', $this->profileView());
        } else{
            return view('partials.anauthorized');
        }
    }

    public function update(Request $request){

        $idUser = Auth::user()->id;

        // Recuperar datos del formulario
        $dataUserProfile = [
            'name' => $request->input('name'),
            'surnames' => $request->input('surnames'),
            'profession' => $request->input('profession'),
        ];

        $dataContact = [
            'location' => $request->input('location'),
            'zip_code' => $request->input('zip_code'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email')
        ];

        $dataSkills = [
            'programming_language' => $request->input('programming_language'),
            'programming_language_2' => $request->input('programming_language_2'),
            'programming_language_3' => $request->input('programming_language_3'),
            'programming_language_4' => $request->input('programming_language_4'),
            'programming_language_5' => $request->input('programming_language_5'),
            'framework' => $request->input('framwork'),
            'framework_2' => $request->input('framework_2'),
            'framework_3' => $request->input('framework_3'),
            'framework_4' => $request->input('framework_4'),
            'framework_5' => $request->input('framework_5'),
            'markup_language' => $request->input('markup_language'),
            'markup_language_2' => $request->input('markup_language_2'),
            'markup_language_3' => $request->input('markup_language_3'),
            'markup_language_4' => $request->input('markup_language_4'),
            'markup_language_5' => $request->input('markup_language_5'),
            'database' => $request->input('database'),
            'database_2' => $request->input('database_2'),
            'database_3' => $request->input('database_3'),
            'database_4' => $request->input('database_4'),
            'database_5' => $request->input('database_5'),
            'control_version' => $request->input('control_version'),
            'control_version_2' => $request->input('control_version_2'),
            'control_version_3' => $request->input('control_version_3'),
            'control_version_4' => $request->input('control_version_4'),
            'control_version_5' => $request->input('control_version_5'),
            'other' => $request->input('other'),
            'other_2' => $request->input('other_2'),
            'other_3' => $request->input('other_3'),
            'other_4' => $request->input('other_4'),
            'other_5' => $request->input('other_5')
        ];

        $dataUrls = [
            'url_linkedIn' => $request->input('url_linkedIn')
        ];


        // Datos existentes de la base de datos
        $userProfile = UserProfile::where('user_id', strval($idUser))->first();
        $contactProfile = Contact::where('user_id', strval($idUser))->first();
        $educationProfile = Education::where('user_id', strval($idUser))->get();
        $experienceProfile = Experience::where('user_id', '=', strval($idUser))->get();
        $skillsProfile = Skills::where('user_id', '=', strval($idUser))->first();
        $interestProfile = Interest::where('user_id', '=', strval($idUser))->get();
        $languageProfile = Language::where('user_id', '=', strval($idUser))->get();
        $urlsProfile = Urls::where('user_id', '=', strval($idUser))->first();

        //Actualizar datos
        $userProfile->update($dataUserProfile);
        $contactProfile->update($dataContact);
        $skillsProfile->update($dataSkills);
        $urlsProfile->update($dataUrls);

        foreach ($educationProfile as $educationProfileItem) {
            $educationItemId = $educationProfileItem->id;
            $dataEducation = [
                'title' => $request->input("title_{$educationItemId}"),
                'name_title' => $request->input("name_title_{$educationItemId}"),
                'start_year' => $request->input("start_year_{$educationItemId}"),
                'end_year' => $request->input("end_year_{$educationItemId}"),
                'location_academic' => $request->input("location_academic_{$educationItemId}"),
                'institution' => $request->input("institution_{$educationItemId}"),
            ];
            $educationProfileItem->update($dataEducation);
        }

        foreach ($experienceProfile as $experienceProfileItem) {
            $experienceProfileId = $experienceProfileItem->id;
            $dataExperience = [
                'name_company' => $request->input("name_company_{$experienceProfileId}"),
                'start_date' => $request->input("start_date_{$experienceProfileId}"),
                'end_date' => $request->input("end_date_{$experienceProfileId}"),
                'description_1' => $request->input("description_1_{$experienceProfileId}"),
                'description_2' => $request->input("description_2_{$experienceProfileId}"),
                'description_3' => $request->input("description_3_{$experienceProfileId}"),
                'description_4' => $request->input("description_4_{$experienceProfileId}"),
                'description_5' => $request->input("description_5_{$experienceProfileId}"),
            ];
            $experienceProfileItem->update($dataExperience);
        }

        foreach ($interestProfile as $interestProfileItem) {
            $interestProfileId = $interestProfileItem->id;
            $dataInterest = [
                'interest' => $request->input("interest_{$interestProfileId}")
            ];
            $interestProfileItem->update($dataInterest);
        }

        foreach ($languageProfile as $languageProfileItem) {
            $languageProfileId = $languageProfileItem->id;
            $dataLanguage = [
                'language' => $request->input("language_{$languageProfileId}"),
                'level' => $request->input("level_{$languageProfileId}"),
                'title_language' => $request->input("title_language_{$languageProfileId}")
            ];
            $languageProfileItem->update($dataLanguage);
        }

        return redirect()->route('profile.index');
    }

    public function delete(){
        $idUser = Auth::user()->id;
        $userProfile = UserProfile::where('user_id', strval($idUser))->first();
        $contactProfile = Contact::where('user_id', strval($idUser))->first();
        $educationProfile = Education::where('user_id', strval($idUser))->get();
        $experienceProfile = Experience::where('user_id', '=', strval($idUser))->get();
        $skillsProfile = Skills::where('user_id', '=', strval($idUser))->first();
        $interestProfile = Interest::where('user_id', '=', strval($idUser))->get();
        $languageProfile = Language::where('user_id', '=', strval($idUser))->get();
        $urlsProfile = Urls::where('user_id', '=', strval($idUser))->first();
        
        $userProfile->delete();
        $contactProfile->delete();
        $skillsProfile->delete();
        $urlsProfile->delete();

        foreach ($educationProfile as $educationProfileItem) {
            $educationProfileItem->delete();
        }
        foreach ($experienceProfile as $experienceProfileItem) {
            $experienceProfileItem->delete();
        }
        foreach ($interestProfile as $interestProfileItem) {
            $interestProfileItem->delete();
        }
        foreach ($languageProfile as $languageProfileItem) {
            $languageProfileItem->delete();
        }
        
        return redirect()->route('profile.index');
    }

    

    public function indexCompany()
    {
        $perPage = 1;
        $userProfileData = UserProfile::simplePaginate($perPage);
    
        $profileData = [];
    
        foreach ($userProfileData as $userProfileDataItem) {
            $idUser = $userProfileDataItem->user_id;
            $educationCount = Education::where('user_id', $idUser)->count();
            $experienceCount = Experience::where('user_id', $idUser)->count();
            $languageCount = Language::where('user_id', $idUser)->count();
            $interestCount = Interest::where('user_id', $idUser)->count();
    
            // Realiza las consultas una vez fuera del bucle
            $userProfiles = UserProfile::where('user_id', $idUser)->get();
            $contacts = Contact::where('user_id', $idUser)->get();
            $educations = Education::where('user_id', $idUser)->get();
            $experiences = Experience::where('user_id', $idUser)->get();
            $skills = Skills::where('user_id', $idUser)->get();
            $languages = Language::where('user_id', $idUser)->get();
            $interests = Interest::where('user_id', $idUser)->get();
            $urls = Urls::where('user_id', $idUser)->get();
    
            $profileData[] = [
                'userProfile' => $userProfiles,
                'contactProfile' => $contacts,
                'educationProfile' => $educations,
                'experienceProfile' => $experiences,
                'skillsProfile' => $skills,
                'languageProfile' => $languages,
                'interestProfile' => $interests,
                'urlsProfile' => $urls
            ];
        }
    
        return view('profile.index', ['userProfileData' => $userProfileData, 'profileData' => $profileData]);
    }
    


}