@extends('pendaftaran.base')
@section('content')
    <h2>Pendaftaran Peserta Pelatihan PPKD-Jakarta Pusat Gelombang 2 </h2>
    <form method="POST" id="signup-form" class="signup-form">
        <h3>
            <span class="title_text">Pemberitahuan</span>
        </h3>
        <fieldset>
            <section>
                <div class="h-ref target" id="intro"></div>
                <h1 class="package-name">Pemberitahuan</h1>
            </section>
            <div class="fieldset-footer">
                <span>Intro</span>
            </div>
        </fieldset>

        <h3>
            <span class="title_text">Account Infomation</span>
        </h3>
        <fieldset>
            <div class="fieldset-content">
                <div class="form-group">
                    <label for="username" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" />
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email" />
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Nomor Induk Kependudukan</label>
                    <input type="number" name="nik" id="nik" placeholder="NIK" />
                </div>
                <div class="form-group">
                    <label for="your_avatar" class="form-label">Kartu Keluarga</label>
                    <div class="form-file">
                        <input type="file" name="kartu_keluarga" id="kartu_keluarga" class="custom-file-input" />
                        <span id='val'></span>
                        <span id='button'>Select File</span>
                    </div>
                </div>
            </div>
            <div class="fieldset-footer">
                <span>Step 1 of 3</span>
            </div>
        </fieldset>

        <h3>
            <span class="title_text">Personal Information</span>
        </h3>
        <fieldset>

            <div class="fieldset-content">
                <div class="form-group">
                    <label for="full_name" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" />
                </div>
                <div class="form-group">
                    <label for="full_name" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" />
                </div>
                {{-- <div class="form-select">
                    <label for="country" class="form-label">Jenis Kelamin</label>
                    <select name="country" id="country">
                        <option value="">Pilih Salah Satu</option>
                        <option value="">Laki-laki</option>
                        <option value="">Perempuan</option>
                    </select>
                </div> --}}
                <div class="form-radio">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <div class="form-radio-item">
                        <input type="radio" name="jenis_kelamin" value="male" id="male" checked="checked" />
                        <label for="male">Male</label>
                        <input type="radio" name="jenis_kelamin" value="female" id="female" />
                        <label for="female">Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="full_name" class="form-label">Pendidikan Terakhir</label>
                    <input type="text" name="pendidikan_terakhir" id="pendidikan_terakhir"
                        placeholder="Pendidikan terakhir" />
                </div>
                <div class="form-group">
                    <label for="full_name" class="form-label">Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" id="nama_sekolah" placeholder="Nama Sekolah" />
                </div>
                <div class="form-group">
                    <label for="full_name" class="form-label">Kejuruan</label>
                    <input type="text" name="kejuruan" id="kejuruan" placeholder="kejuruan" />
                </div>
            </div>

            <div class="fieldset-footer">
                <span>Step 2 of 3</span>
            </div>

        </fieldset>

        <h3>
            <span class="title_text">Payment Details</span>
        </h3>
        <fieldset>
            <div class="fieldset-content">
                <div class="form-group">
                    <label for="full_name" class="form-label">Nomor Telpon</label>
                    <input type="number" name="nomor_hp" id="nomor_hp" placeholder="nomor telpon" />
                </div>
                <div class="form-group">
                    <label for="full_name" class="form-label">Aktivitas Saat Ini</label>
                    <select type="text" name="aktivitas_saat_ini" id="aktivitas_saat_ini"
                        placeholder="Aktivitas sekarang">
                        <option value="">Belum Bekerja</option>
                        <option value="">Wirausaha</option>
                        <option value="">Part Time</option>
                    </select>
                </div>
            </div>

            <div class="fieldset-footer">
                <span>Step 3 of 3</span>
            </div>
        </fieldset>
    </form>
@endsection
