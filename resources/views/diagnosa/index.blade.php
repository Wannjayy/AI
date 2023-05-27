@extends('layout.index')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Diagnosa</h4>
                    <p class="card-description">pilih satu atau lebih gejala yang anda alami</p>
                    <form method="POST" action="{{ route('diagnosa.diagnose') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="1">1. Demam<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="20">20. Tuli<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="2">2. Sakit Kepala<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="21">21. Ada yang tumbuh di mulut<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="3">3. Nyeri saat bicara atau menelan<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="22">22. Air liur menetes<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="4">4. Batuk<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="23">23. Berat badan menurun<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="5">5. Hidung Tersumbat<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="24">24. Bunyi nafas abnormal<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="6">6. Nyeri Telinga<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="25">25. Infeksi sinus<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="7">7. Nyeri Tenggorokan<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="26">26. Nyeri antara mata<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="8">8. Hidung Meler<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="27">27. Nyeri pinggir hidung<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="9">9. Letih dan Lesu<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="28">28. Nyeri pipi dibawah mata<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="10">10. Mual dan Muntah<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="29">29. Nyeri wajah<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="11">11. Selaput lendir merah dan Bengkak<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="30">30. Perubahan kulit<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="12">12. Ada Benjolan di Leher<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="31">31. Perubahan suara<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="13">13. Nyeri Leher<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="32">32. Radang gendang telinga<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="14">14. Pembekakan kelenjar getah bening<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="33">33. Sakit gigi<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="15">15. Pendarahan hidung<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="34">34. Serangan vertigo<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="16">16. Suara serak<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="35">35. Telinga berdenging<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="17">17. Bola mata bergerak tanpa sadar<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="36">36. Telinga terasa penuh<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="18">18. Dahi sakit<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="37">37. Tenggorokan gatal<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="19">19. Leher bengkak<br>
                            </div>
                            <div class="col-lg-6">
                                <input type="checkbox" name="gejala[]" value="38">38 Tubuh tak seimbang<br>
                            </div>
                        </div>

                        <br><br>
                        <button type="submit" class="btn  btn-rounded btn-success me-2">Diagnosa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
