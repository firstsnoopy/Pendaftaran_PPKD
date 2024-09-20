<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('admin/src/assets/images/logos/potoo.png') }}">
    <title>Pendaftaran Peserta Pelatihan Reguler</title>
</head>

<div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">
        <div class="formbold-event-wrapper">
            <span>PPKD JAKARTA PUSAT</span>
            <h3>Pendaftaran Peserta Pelatihan Reguler 2024</h3>
            <img src="{{ asset('daftar/images/body-bg.jpg') }}" width="540" height="340">
            <h4>Pusat Pelatihan Kerja Daerah (PPKD) Jakarta Pusat – Dinas Tenaga Kerja, Transmigrasi dan Energi Provinsi
                DKI Jakarta Membuka Pendaftaran untuk Kegiatan Pelatihan Tahun 2024.</h4>
            <p>
                Fasilitas:<br>
                Program Pelatihan yang disusun Berbasis Kompetensi Peralatan dan Bahan Praktek‍ <br>
                Instruktur Profesional <br>
                Pakaian, Seragam, dan Konsumsi <br> Sertifikat Pelatihan <br>
                Sertifikat Kompetensi BNSP <br>
                <br>
                Dokumen Persyaratan <br>
                1. Fotokopi KTP DKI Jakarta <br>
                2. Kartu Keluarga <br>
                3. Fotokopi Ijazah terakhir <br>
                4. Pas photo formal ukuran 3×4 (4 lembar) <br>
                5. Fotokopi Sertifikat Vaksin Covid-19 <br>
            </p>

            <div class="formbold-event-details">
                <h5>Pelaksanaan Pelatihan</h5>

                <ul>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1675_1725)">
                                <path
                                    d="M12.75 2.25H15.75C15.9489 2.25 16.1397 2.32902 16.2803 2.46967C16.421 2.61032 16.5 2.80109 16.5 3V15C16.5 15.1989 16.421 15.3897 16.2803 15.5303C16.1397 15.671 15.9489 15.75 15.75 15.75H2.25C2.05109 15.75 1.86032 15.671 1.71967 15.5303C1.57902 15.3897 1.5 15.1989 1.5 15V3C1.5 2.80109 1.57902 2.61032 1.71967 2.46967C1.86032 2.32902 2.05109 2.25 2.25 2.25H5.25V0.75H6.75V2.25H11.25V0.75H12.75V2.25ZM11.25 3.75H6.75V5.25H5.25V3.75H3V6.75H15V3.75H12.75V5.25H11.25V3.75ZM15 8.25H3V14.25H15V8.25Z"
                                    fill="#536387" />
                            </g>
                        </svg>
                        Oktober - Desember 2024
                    </li>
                    <li>
                        <a href="https://www.instagram.com/ppkdjp/?igsh=MWxsaTliY3ZvaW9sNg==" width="18"
                            height="18" viewBox="0 0 18 18" target="_blank" class="btn btn-light">
                            <i class="fab fa-instagram"></i>
                            <defs>
                        </a>
                        ppkdjp
                    </li>
                    <li>
                        <a href="https://g.co/kgs/uhPcHzT" width="18" height="18" viewBox="0 0 18 18"
                            fill="none">
                            <i class="material-icons">add_location</i>
                        </a>
                        Gedung PPKJ Jakpus
                    </li>
                    <li>
                        <a href="https://ppkdjakpus.com/2024/01/02/pendaftaran-peserta-pelatihan-tahun-2024/"
                            width="18" height="18" viewBox="0 0 18 18" target="_blank" class="btn btn-light">
                            <i class="material-icons">public</i>
                        </a>
                        Website PPKD Jakpus
                    </li>
                </ul>
            </div>
        </div>

        <form action="{{ route('peserta.store') }}" method="POST">
            @csrf
            <h2 class="formbold-form-title">Register now</h2>

            <div class="formbold-input-flex">
                <div>
                    <label for="nama_lengkap" class="formbold-form-label">
                        Nama Lengkap
                    </label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="formbold-form-input">
                </div>
                <div>
                    <label for="nik" class="formbold-form-label"> Nomor Induk Kependudukan </label>
                    <input type="text" name="nik" id="nik" class="formbold-form-input" />
                </div>
            </div>
            <div class="formbold-input-flex">
                <div>
                    <label for="kartu_keluarga" class="formbold-form-label">
                        Kartu Keluarga
                    </label>
                    <input type="text" name="kartu_keluarga" id="kartu_keluarga" class="formbold-form-input" />
                </div>
                <div>
                    <label for="jenis_kelamin" class="formbold-form-label"> Jenis Kelamin</label>
                    <select type="text" name="jenis_kelamin" id="jenis_kelamin" class="formbold-form-input">
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="formbold-input-flex">
                <div>
                    <label for="id_jurusan" class="formbold-form-label">
                        Jurusan
                    </label>
                    <select type="file" name="id_jurusan" id="id_jurusan" class="formbold-form-input">
                        <option value="" disable option>Pilih Kejuruan</option>
                        @foreach ($jurusan as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_jurusan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_gelombang" class="formbold-form-label"> Gelombang</label>
                    <input type="text" name="id_gelombang" id="id_gelombang" class="formbold-form-input"
                        value="{{ $item->id }}" selected {{ $item->nama_gelombang }}>
                    {{-- @foreach ($gelombang->where('aktif', 1) as $item) --}}
                    {{-- <option value="">Pilih Gelombang</option> --}}
                    {{-- @endforeach --}}
                </div>
            </div>
            <div class="formbold-input-flex">
                <div>
                    <label for="tempat_lahir" class="formbold-form-label">
                        Tempat Lahir
                    </label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="formbold-form-input" />
                </div>
                <div>
                    <label for="tanggal_lahir" class="formbold-form-label"> Tanggal Lahir </label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="formbold-form-input" />
                </div>
            </div>
            <div class="formbold-input-flex">
                <div>
                    <label for="pendidikan_terakhir" class="formbold-form-label">
                        Pendidikan Terakhir
                    </label>
                    <input type="text" name="pendidikan_terakhir" id="pendidikan_terakhir"
                        class="formbold-form-input" />
                </div>
                <div>
                    <label for="nama_sekolah" class="formbold-form-label"> Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" id="nama_sekolah" class="formbold-form-input" />
                </div>
            </div>
            <div class="formbold-input-flex">
                <div>
                    <label for="kejuruan" class="formbold-form-label">
                        Kejuruan
                    </label>
                    <input type="text" name="kejuruan" id="kejuruan" class="formbold-form-input" />
                </div>
                <div>
                    <label for="aktivitas_saat_ini" class="formbold-form-label"> Aktivitas</label>
                    <input type="text" name="aktivitas_saat_ini" id="aktivitas_saat_ini"
                        class="formbold-form-input" />
                </div>
            </div>
            <div class="formbold-input-flex">
                <div>
                    <label for="email" class="formbold-form-label">Email</label>
                    <input type="email" name="email" id="email" class="formbold-form-input">
                </div>
                <div>
                    <label for="nomor_hp" class="formbold-form-label"> Nomor Telepon* </label>
                    <input type="number" name="nomor_hp" id="nomor_hp" class="formbold-form-input" />
                </div>
            </div>

            <p class="formbold-policy">
                By filling out this form and clicking submit, you acknowledge our
                <a href="#">privacy policy.</a>
            </p>
            <button class="formbold-btn">Submit Event Registration</button>
        </form>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
    }

    .formbold-main-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 48px;
    }

    .formbold-form-wrapper {
        margin: 0 auto;
        max-width: 550px;
        width: 100%;
        background: white;
    }

    .formbold-event-wrapper span {
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        letter-spacing: 2.5px;
        color: #6a64f1;
        display: inline-block;
        margin-bottom: 12px;
    }

    .formbold-event-wrapper h3 {
        font-weight: 700;
        font-size: 28px;
        line-height: 34px;
        color: #07074d;
        width: 60%;
        margin-bottom: 15px;
    }

    .formbold-event-wrapper h4 {
        font-weight: 600;
        font-size: 20px;
        line-height: 24px;
        color: #07074d;

        margin: 25px 0 15px;
    }

    .formbold-event-wrapper p {
        font-size: 16px;
        line-height: 24px;
        color: #536387;
    }

    .formbold-event-details {
        background: #fafafa;
        border: 1px solid #dde3ec;
        border-radius: 5px;
        margin: 25px 0 30px;
    }

    .formbold-event-details h5 {
        color: #07074d;
        font-weight: 600;
        font-size: 18px;
        line-height: 24px;
        padding: 15px 25px;
    }

    .formbold-event-details ul {
        border-top: 1px solid #edeef2;
        padding: 25px;
        margin: 0;
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        row-gap: 14px;
    }

    .formbold-event-details ul li {
        color: #536387;
        font-size: 16px;
        line-height: 24px;
        width: 50%;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .formbold-form-title {
        color: #07074d;
        font-weight: 600;
        font-size: 28px;
        line-height: 35px;
        width: 60%;
        margin-bottom: 30px;
    }

    .formbold-input-flex {
        display: flex;
        gap: 20px;
        margin-bottom: 15px;
    }

    .formbold-input-flex>div {
        width: 50%;
    }

    .formbold-form-input {
        text-align: left;
        width: 100%;
        padding: 13px 22px;
        border-radius: 5px;
        border: 1px solid #dde3ec;
        background: #ffffff;
        font-weight: 500;
        font-size: 16px;
        color: #536387;
        outline: none;
        resize: none;
    }

    .formbold-form-input:focus {
        border-color: #6a64f1;
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold-form-label {
        color: #536387;
        font-size: 14px;
        line-height: 24px;
        display: block;
        margin-bottom: 10px;
    }

    .formbold-policy {
        font-size: 14px;
        line-height: 24px;
        color: #536387;
        width: 70%;
        margin-top: 22px;
    }

    .formbold-policy a {
        color: #6a64f1;
    }

    .formbold-btn {
        text-align: center;
        width: 100%;
        font-size: 16px;
        border-radius: 5px;
        padding: 14px 25px;
        border: none;
        font-weight: 500;
        background-color: #6a64f1;
        color: white;
        cursor: pointer;
        margin-top: 25px;
    }

    .formbold-btn:hover {
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
</style>
