@extends('layouts.app') 
@section('content') {{-- Side Navbar --}}
<div class="sidenav" style="height: 100%; width: 240px; position: fixed; z-index: 1; background-color:blue; top: 0; left: 0; overflow-x: hidden; padding-top: 20px;">
    <h3 style="margin-left: 4px; font-size: 38px; text-align:center"><i class="fas fa-notes-medical" style="margin-left: 3px;"></i> eHealth</h3>
    <br>
    <ul style="padding: 6px 8px 6px 16px; text-decoration: none; font-size: 20px; display: block; list-style: none;">
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/patients/profile/{{Auth::user()->id}}/edit" style="color:black;">  Profile</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/patients/familyhistory/{{Auth::user()->id}}/edit"
                style="color:black;">  Family History</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="/patients/myhistory/{{Auth::user()->id}}/edit" style="color:black;">  Personal History</a></li>
        {{--
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li>
        <li><i class="fas fa-ban" style="margin-right: 3px;"></i><a href="#about" style="color:black;">  About</a></li> --}}
    </ul>
</div>

{{-- Start of the Main Content --}}
<div class="container col-md-10" style="margin-left: 240px; padding: 0px 10px;">
    <div class="jumbotron">
        <p>kjsahdlkadkjadklldajl</p>
    </div>
    <div class="card">
        <div class="card-header">
            Personal History for {{$patient->firstname}} {{$patient->lastname}}
        </div>
        <div class="card-body">
            <form action="/patients/myhistory/{{ $patient->id }}" method="post">
                {{ csrf_field() }} {{ method_field('PATCH')}}


                <?php
                if (!empty($patient->my_history)) {
                $myhistory = explode(",", $patient->my_history);
                } else {
                // Set array to blanks if null
                $myhistory =[];
                }
                ?>

                    <h5>Check all boxes that apply:</h5>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Alcoholism" {{in_array(
                                "Alcoholism",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Alcoholism
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Alzheimer's" {{in_array(
                                "Alzheimer's",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Alzheimer's
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Amblyopia" {{in_array(
                                "Amblyopia",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Amblyopia
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Anaphylaxis" {{in_array(
                                "Anaphylaxis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Anaphylaxis
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Anemia" {{in_array(
                                "Anemia",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Anemia
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Aneurysm" {{in_array(
                                "Aneurysm",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Aneurysm
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Arrhythmia" {{in_array(
                                "Arrhythmia",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Arrhythmia
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Arthritis" {{in_array(
                                "Arthritis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Arthritis
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Asthma" {{in_array(
                                "Asthma",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Asthma
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Biliary Tract Disease" {{in_array(
                                "Biliary Tract Disease",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Biliary Tract Disease
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Bipolar Disorder" {{in_array(
                                "Bipolar Disorder",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Bipolar Disorder
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Blindness" {{in_array(
                                "Blindness",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Blindness
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Cancer" {{in_array(
                                "Cancer",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Cancer
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Cataplexy" {{in_array(
                                "Cataplexy",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Cataplexy
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Cataracts" {{in_array(
                                "Cataracts",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Cataracts
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Chronic Pain" {{in_array(
                                "Chronic Pain",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Chronic Pain
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Cirrhosis" {{in_array(
                                "Cirrhosis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Cirrhosis
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Collapsed Lung" {{in_array(
                                "Collapsed Lung",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Collapsed Lung
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Colorblindness" {{in_array(
                                "Colorblindness",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Colorblindness
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Congestive Heart Failure" {{in_array(
                                "Congestive Heart Failure",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Congestive Heart Failure
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="COPD" {{in_array( "COPD",$myhistory)?
                                "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            COPD
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Coronary Artery Disease" {{in_array(
                                "Coronary Artery Disease",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Coronary Artery Disease
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Crohn's Disease" {{in_array(
                                "Crohn's Disease",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Crohn's Disease
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Cryptococcus" {{in_array(
                                "Cryptococcus",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Cryptococcus
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Cystic Fibrosis" {{in_array(
                                "Cystic Fibrosis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Cystic Fibrosis
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Cytomegalovirus" {{in_array(
                                "Cytomegalovirus",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Cytomegalovirus
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Degenerative Arthritis" {{in_array(
                                "Degenerative Arthritis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Degenerative Arthritis
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Depression" {{in_array(
                                "Depression",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Depression
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Dermatitis" {{in_array(
                                "Dermatitis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Dermatitis
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Diabetes" {{in_array(
                                "Diabetes",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Diabetes
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Ectopic Pregnancy" {{in_array(
                                "Ectopic Pregnancy",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Ectopic Pregnancy
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Endometriosis" {{in_array(
                                "Endometriosis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Endometriosis
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Epilepsy" {{in_array(
                                "Epilepsy",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Epilepsy
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Erectile Dysfunction" {{in_array(
                                "Erectile Dysfunction",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Erectile Dysfunction
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Gallstones" {{in_array(
                                "Gallstones",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Gallstones
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Glaucoma" {{in_array(
                                "Glaucoma",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Glaucoma
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Glomerulonepritis" {{in_array(
                                "Glomerulonepritis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Glomerulonepritis
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Gout" {{in_array( "Gout",$myhistory)?
                                "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Gout
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Headaches" {{in_array(
                                "Headaches",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Headaches
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Hearing Impairment" {{in_array(
                                "Hearing Impairment",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Hearing Impairment
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Hepatitis A" {{in_array(
                                "Hepatitis A",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Hepatitis A
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Hepatitis B" {{in_array(
                                "Hepatitis B",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Hepatitus B
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Hepatitis C" {{in_array(
                                "Hepatitis C",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Hepatitus C
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="HIV" {{in_array( "HIV",$myhistory)?
                                "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            HIV
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Hypertension" {{in_array(
                                "Hypertension",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Hypertension
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Hyperthyroidism" {{in_array(
                                "Hyperthyroidism",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Hyperthyroidism
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Hypothyroidism" {{in_array(
                                "Hypothyroidism",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Hypothyroidism
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Immune Deficiency" {{in_array(
                                "Immune Deficiency",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Immune Deficiency
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Infections (chronic)" {{in_array(
                                "Infections (chronic)",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Infections (chronic)
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Infertility" {{in_array(
                                "Infertility",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Infertility
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Insomnia" {{in_array(
                                "Insomnia",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Insomnia
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Ischemic Bowel Disease" {{in_array(
                                "Ischemic Bowel Disease",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Ischemic Bowel Disease
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Kidney Stones" {{in_array(
                                "Kidney Stones",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Kidney Stones
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Lupus" {{in_array( "Lupus",$myhistory)?
                                "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Lupus
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Lyme Disease" {{in_array(
                                "Lyme Disease",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Lyme Disease
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Macular Degeneration" {{in_array(
                                "Macular Degeneration",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Macular Degeneration
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="MAI" {{in_array( "MAI",$myhistory)?
                                "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            MAI
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Menopause" {{in_array(
                                "Menopause",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Menopause
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Multiple Sclerosis" {{in_array(
                                "Multiple Sclerosis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Multiple Sclerosis
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Narcolepsy" {{in_array(
                                "Narcolepsy",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Narcolepsy
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Nephrotic Syndrome" {{in_array(
                                "Nephrotic Syndrome",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Nephrotic Syndrome
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Ocular Misalignment" {{in_array(
                                "Ocular Misalignment",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Ocular Misalignment
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Osteoporosis" {{in_array(
                                "Osteoporosis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Osteoporosis
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Ovarian Cysts" {{in_array(
                                "Ovarian Cysts",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Ovarian Cysts
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Pancreatitus" {{in_array(
                                "Pancreatitus",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Pancreatitus
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Parkinson's Disease" {{in_array(
                                "Parkinson's Disease",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Parkinson's Disease
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Peripheral Neuropathy" {{in_array(
                                "Peripheral Neuropathy",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Peripheral Neuropathy
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Pleural Effusion" {{in_array(
                                "Pleural Effusion",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Pleural Effusion
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Prostate Enlarged" {{in_array(
                                "Prostate Enlarged",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Prostate Enlarged
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Prostatitis (chronic)" {{in_array(
                                "Prostatitis (chronic)",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Prostatitis (chronic)
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Psoriasis" {{in_array(
                                "Psoriasis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Psoriasis
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Pulmonary Embolism" {{in_array(
                                "Pulmonary Embolism",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Pulmonary Embolism
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Pulmonary Fibrosis" {{in_array(
                                "Pulmonary Fibrosis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Pulmonary Fibrosis
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Reflux Esophagitis" {{in_array(
                                "Reflux Esophagitis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Reflux Esophagitis
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Renal Failure" {{in_array(
                                "Renal Failure",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Renal Failure
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Retinal Detachment" {{in_array(
                                "Retinal Detachment",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Retinal Detachment
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Rheumatoid Arthritis" {{in_array(
                                "Rheumatoid Arthritis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Rheumatoid Arthritis
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Sickle Cell Anemia" {{in_array(
                                "Sickle Cell Anemia",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Sickle Cell Anemia
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Sinusitis (chronic)" {{in_array(
                                "Sinusitis (chronic)",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Sinusitis (chronic)
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Sleep Apnea" {{in_array(
                                "Sleep Apnea",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Sleep Apnea
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Somnambulism" {{in_array(
                                "Somnambulism",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Somnambulism
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Spina Bifida" {{in_array(
                                "Spina Bifida",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Spina Bifida
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Stroke" {{in_array(
                                "Stroke",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Stroke
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Thalassemia" {{in_array(
                                "Thalassemia",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Thalassemia
                        </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Tinnitus" {{in_array(
                                "Tinnitus",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Tinnitus
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Toxoplasmosis" {{in_array(
                                "Toxoplasmosis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Toxoplasmosis
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Tuberculosis" {{in_array(
                                "Tuberculosis",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Tuberculosis
                        </label>
                        </div>
                        <div class="col form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck1" name="my_history[]" value="Ulcers" {{in_array(
                                "Ulcers",$myhistory)? "checked": ""}}>
                            <label class="form-check-label" for="defaultCheck1">
                            Ulcers
                        </label>
                        </div>
                    </div>
                    <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection