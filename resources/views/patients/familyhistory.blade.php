@extends('layouts.app') 
@section('content') {{-- Side Navbar --}}
<div class="sidenav" style="height: 100%; width: 240px; position: fixed; z-index: 1; background-color:blue; top: 0; left: 0; overflow-x: hidden; padding-top: 20px;">
    <h3 style="margin-left: 4px; font-size: 30px"><i class="fas fa-notes-medical" style="margin-left: 3px;"></i> eHealth</h3>
    <br>
    <ul style="padding: 6px 8px 6px 16px; text-decoration: none; font-size: 20px; display: block; list-style: none;">
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/patients/51/edit" style="color:black;">  Profile</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/patients/51/edit" style="color:black;">  Patient History</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Family History</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 4</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 5</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 6</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 7</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 8</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 9</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 10</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 11</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#" style="color:black;">  Link 12</a></li>
    </ul>
</div>

{{-- Start of the Main Content --}}
<div class="container col-md-10" style="margin-left: 240px; padding: 0px 10px;">
    <div class="jumbotron">
        <p>kjsahdlkadkjadklldajl</p>
    </div>
    <div class="card">
        <div class="card-header">
            Family History for {{$patient->firstname}} {{$patient->lastname}}
        </div>
        <div class="card-body">
            <form action="/patients/{{ $patient->id }}" method="post">
                {{ csrf_field() }} {{ method_field('PATCH')}}
                <h5>Check all boxes that apply:</h5>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Alcoholism
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Alzheimer's
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Amblyopia
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Anaphylaxis
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Anemia
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Aneurysm
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Arrhythmia
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Arthritis
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Asthma
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Biliary Tract Disease
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Bipolar Disorder
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Blindness
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Cancer
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Cataplexy
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Cataracts
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Chronic Pain
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Cirrhosis
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Collapsed Lung
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Colorblindness
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Congestive Heart Failure
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            COPD
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Coronary Artery Disease
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Crohn's Disease
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Cryptococcus
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Cystic Fibrosis
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Cytomegalovirus
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Degenerative Arthritis
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Depression
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Dermatitis
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Diabetes
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Ectopic Pregnancy
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Endometriosis
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Epilepsy
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Erectile Dysfunction
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Gallstones
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Glaucoma
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Glomerulonepritis
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Gout
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Headaches
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Hearing Impairment
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Hepatitis A
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Hepatitus B
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Hepatitus C
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            HIV
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Hypertension
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Hyperthyroidism
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Hypothyroidism
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Immune Deficiency
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Infections (chronic)
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Infertility
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Insomnia
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Ischemic Bowel Disease
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Kidney Stones
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Lupus
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Lyme Disease
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Macular Degeneration
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            MAI
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Menopause
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Multiple Sclerosis
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Narcolepsy
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Nephrotic Syndrome
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Ocular Misalignment
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Osteoporosis
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Ovarian Cysts
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Pancreatitus
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Parkinson's Disease
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Peripheral Neuropathy
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Pleural Effusion
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Prostate Enlarged
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Prostatitis (chronic)
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Psoriasis
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Pulmonary Embolism
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Pulmonary Fibrosis
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Reflux Esophagitis
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Renal Failure
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Retinal Detachment
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Rheumatoid Arthritis
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Sickle Cell Anemia
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Sinusitis (chronic)
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Sleep Apnea
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Somnambulism
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Spina Bifida
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Stroke
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Thalassemia
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Tinnitus
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Toxoplasmosis
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Tuberculosis
                        </label>
                    </div>
                    <div class="col form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Ulcers
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection