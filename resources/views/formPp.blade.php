@extends('layouts.app')
@section('title', 'form')
@section('content')

    <section>
        {{-- start wizard syarat --}}

        {{-- end wizard syarat --}}

        {{-- start form --}}
        <div style="">
            <div class="container-fluid px-1 py-5 mx-auto">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                        <h3 class="text-center">Pendaftaran Pemuda Pelopor Tahun 2025</h3>
                        <p class="text-muted mb-4">Isi formulir ini dengan data yang benar dan lengkap.</p>

                        <div class="card px-lg-5 px-3" style="border-radius: 15px;">
                            <div class="card-body py-3 ">

                                <form method="POST" action="formPp" id="myForm" class="form-card mt-4 needs-validation"
                                    novalidate>
                                    @csrf
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Nama lengkap<span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text" id="nama" name="nama_lengkap"
                                                placeholder="" required>
                                            <div class="invalid-feedback">Nama lengkap wajib diisi.</div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Email<span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="email" id="email" name="email"
                                                placeholder="" required>
                                            <div class="invalid-feedback">Email wajib diisi.</div>
                                        </div>
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Nomor Whatsapp<span
                                                    class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="number" id="whatsapp" name="whatsapp"
                                                placeholder="" required>
                                            <div class="invalid-feedback">No whatsapp wajib diisi.</div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">NIK<span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text" id="nik" name="nik"
                                                placeholder="" required>
                                            <div class="invalid-feedback">NIK wajib diisi.</div>
                                        </div>
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3 mb-1">Tanggal Lahir<span
                                                    class="text-danger"> *</span></label>
                                            <div class="d-flex flex-sm-row gap-2">
                                                <div class="flex-fill mr-3">
                                                    <select class="form-control w-100" id="tgl_lahir_dd" name="tgl_lahir_dd"
                                                        required>
                                                        <option value="">dd</option>
                                                        @for ($i = 1; $i <= 31; $i++)
                                                            <option value="{{ $i }}">{{ $i }}
                                                            </option>
                                                        @endfor
                                                    </select>
                                                </div>

                                                <div class="flex-fill mr-3">
                                                    <select class="form-control w-100" id="tgl_lahir_mm" name="tgl_lahir_mm"
                                                        required>
                                                        <option value="">mm</option>
                                                        <option value="1">Januari</option>
                                                        <option value="2">Februari</option>
                                                        <option value="3">Maret</option>
                                                        <option value="4">April</option>
                                                        <option value="5">Mei</option>
                                                        <option value="6">Juni</option>
                                                        <option value="7">Juli</option>
                                                        <option value="8">Agustus</option>
                                                        <option value="9">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                                </div>

                                                <div class="flex-fill">
                                                    <select class="form-control w-100" id="tgl_lahir_yyyy"
                                                        name="tgl_lahir_yyyy" required>
                                                        <option value="">yyyy</option>
                                                        @php
                                                            foreach (range(1990, 2010) as $year) {
                                                                echo "<option value='$year'>$year</option>";
                                                            }
                                                        @endphp
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <label class="text-left px-3">Alamat<span class="text-danger"> *</span></label> --}}
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Provinsi<span class="text-danger">
                                                    *</span></label>
                                            <select class="form-control w-100" id="provinsi" name="tgl_lahir_mm" required>
                                                <option value="">--Pilih Provinsi--</option>
                                            </select>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Kabupaten/Kota<span
                                                    class="text-danger">
                                                    *</span></label>
                                            <select class="form-control w-100" id="kota" name="tgl_lahir_mm" required>
                                                <option value="">--Pilih Kota--</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Kecamatan<span class="text-danger">
                                                    *</span></label>
                                            <select class="form-control w-100" id="kecamatan" name="tgl_lahir_mm"
                                                required>
                                                <option value="">--Pilih Kota--</option>
                                            </select>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Desa/Kelurahan<span
                                                    class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text" id="desa_kelurahan"
                                                name="desa_kelurahan" placeholder="" required>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">RW<span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text" id="rw" name="rw"
                                                placeholder="" required>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                        <div class="form-group col-sm-6 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">RT<span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="text" id="rt" name="rt"
                                                placeholder="" required>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Proposal kepeloporan
                                                <small>(link
                                                    gdrive)</small><span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" id="link_proposal"
                                                name="link_proposal" placeholder="" required>
                                            <div class="invalid-feedback">Wajib diisi.</div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between text-left">
                                        <div class="form-group col-sm-12 flex-column d-flex">
                                            <label class="form-control-label h6 px-3">Upload foto KTP <small>(max
                                                    200kb)</small><span class="text-danger">
                                                    *</span></label>
                                            <input class="form-control" type="file" id="foto_ktp" name="foto_ktp"
                                                placeholder="" required>
                                            <div class="invalid-feedback">Wajib upload foto KTP.</div>
                                        </div>
                                    </div>

                                    <div class="form-group text-left ml-5">
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="invalidCheck" required>
                                            <label class="form-check-label">Saya menyatakan bahwa seluruh data yang saya
                                                isi
                                                adalah benar.</label>
                                        </div>
                                    </div>
                            </div>
                            <div id="alert-warning-2" class="alert alert-danger d-none" role="alert">
                                Silakan lengkapi data anda.
                            </div>
                            <div class="row justify-content-end">
                                <div class="form-group col-sm-12 button">
                                    <button type="submit" class="btn" style="width: 100%">Kirim</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end form --}}
    </section>


    <script>
        let a = 10;
        document.addEventListener('DOMContentLoaded', async function() {
            const provinsiSelect = document.getElementById('provinsi');
            console.log(provinsiSelect);
            const kotaSelect = document.getElementById('kota');
            const kecamatanSelect = document.getElementById('kecamatan');
            const desaSelect = document.getElementById('desa');

            // Ambil data provinsi
            const provinsiRes = await fetch('/provinsi');
            console.log(provinsiRes);
            const provinsiData = await provinsiRes.json();
            console.log(provinsiData);
            provinsiData.forEach(item => {
                provinsiSelect.innerHTML += `<option value="${item.code}">${item.name}</option>`;
            });

            // Event saat provinsi dipilih
            provinsiSelect.addEventListener('change', async function() {
                kotaSelect.innerHTML = '<option value="">-- Pilih Kota/Kabupaten --</option>';

                const res = await fetch(`/kota/${this.value}`);
                const data = await res.json();
                data.forEach(item => {
                    kotaSelect.innerHTML +=
                        `<option value="${item.code}">${item.name}</option>`;
                });
            });

            kotaSelect.addEventListener('change', async function() {
                kecamatanSelect.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';

                const res = await fetch(`/kecamatan/${this.value}`);
                const data = await res.json();
                data.forEach(item => {
                    kecamatanSelect.innerHTML +=
                        `<option value="${item.code}">${item.name}</option>`;
                });
            });

            kecamatanSelect.addEventListener('change', async function() {
                desaSelect.innerHTML = '<option value="">-- Pilih Desa --</option>';

                const res = await fetch(`/desa/${this.value}`);
                const data = await res.json();
                data.forEach(item => {
                    desaSelect.innerHTML +=
                        `<option value="${item.code}">${item.name}</option>`;
                });
            });

            // Event saat kota dipilih
        });
    </script>
@endsection
