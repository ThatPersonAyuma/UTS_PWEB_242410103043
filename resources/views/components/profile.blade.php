@props([
    'student' => null,
    'stats',
    ])
@push('styles')
<style>
    #pf {
        cursor: pointer;
    }

    #pf img {
        transition: filter 0.3s ease;
    }

    .edit-btn {
        opacity: 0;
        transition: opacity 0.3s ease;
        background-color: rgba(0, 0, 0, 0.6);
        color: #fff;
        backdrop-filter: blur(4px);
    }

    #pf:hover .edit-btn {
        opacity: 1;
    }

    #pf:hover img {
        filter: brightness(0.5);
    }
</style>
@endpush
<div class="container py-4">
    <div class="row">
        <div class="col-md-3 text-center mb-4 mb-md-0">
            <div class="card p-3 shadow-sm border-0 rounded-4">
                <div id="pf" class="position-relative d-inline-block mb-3">
                    <img src="{{ asset('img/photoProfile/' . $student['id'] . '.jpg') }}" 
                        class="rounded-circle mb-3 shadow" width="150" height="150" 
                        alt="Foto Profil">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label class="btn btn-secondary position-absolute top-50 start-50 translate-middle rounded-pill px-4 py-2 edit-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                                <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z"/>
                                <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
                            </svg> Ganti
                            <input type="file" name="photo" class="d-none" onchange="this.form.submit()">
                        </label>
                    </form>
                </div>
                <h5 class="mt-2">{{ $student['name'] }}</h5>
                <p class="text-muted small">{{ $student['email'] }}</p>
                <p><span class="badge bg-success">{{ ucfirst($student['rank']) }}</span></p>
                <hr>
                <div class="mt-3">
                    <h6 class="text-muted mb-2">Interest:</h6>
                    @foreach ($student['interest'] as $item)
                        <button type="button" class="btn btn-primary btn-sm rounded-pill me-1 text-light" disabled>
                            {{ $item }}
                        </button>
                    @endforeach
                </div>
                <hr>
                <p class="small mb-1"><strong>Bergabung:</strong> {{ $student['createdAt'] }}</p>
                <p class="small"><strong>Terakhir Aktif:</strong> {{ $student['lastActive'] }}</p>
            </div>
        </div>

        <div class="col-md-9">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab">
                                <i class="bi bi-person-lines-fill me-1"></i> Informasi Pribadi
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="stats-tab" data-bs-toggle="tab" data-bs-target="#stats" type="button" role="tab">
                                <i class="bi bi-graph-up me-1"></i> Aktivitas
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab">
                                <i class="bi bi-gear me-1"></i> Pengaturan Akun
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content mt-3" id="profileTabsContent">
                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                            <form action="" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" name="name" class="form-control" value="{{ $student['name'] }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ $student['email'] }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Nomor Telepon</label>
                                        <input type="text" name="phone" class="form-control" value="{{ $student['phoneNumber'] }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input type="date" name="birth_date" class="form-control" value="{{ $student['birthDate'] }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <select name="gender" class="form-select">
                                            <option value="">Pilih...</option>
                                            <option value="L" {{ ($student['gender'] ?? '') === 'L' ? 'selected' : '' }}>Laki-laki</option>
                                            <option value="P" {{ ($student['gender'] ?? '') === 'P' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Bio / Tentang Saya</label>
                                        <textarea name="bio" class="form-control" rows="3">{{ $student['bio'] }}</textarea>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary rounded-pill px-4">
                                            <i class="bi bi-save me-1"></i> Simpan Perubahan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="stats" role="tabpanel">
                            <div class="row text-center g-3">
                                <div class="col-md-4">
                                    <div class="card p-3 shadow-sm border-0 rounded-4">
                                        <h4>{{ $stats['courses'] ?? 0 }}</h4>
                                        <p class="text-muted mb-0">Pelajaran Diikuti</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card p-3 shadow-sm border-0 rounded-4">
                                        <h4>{{ $stats['modules'] ?? 0 }}</h4>
                                        <p class="text-muted mb-0">Modul Selesai</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card p-3 shadow-sm border-0 rounded-4">
                                        <h4>{{ $stats['articles'] ?? 0 }}</h4>
                                        <p class="text-muted mb-0">Artikel Diterbitkan</p>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <h6 class="fw-semibold mb-3">Progress Keseluruhan</h6>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar bg-success" style="width: {{ $stats['progress'] ?? 0 }}%">
                                    {{ $stats['progress'] ?? 0 }}%
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="settings" role="tabpanel">
                            <form action="" method="POST" class="mt-3">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label class="form-label">Password Lama</label>
                                    <input type="password" name="old_password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password Baru</label>
                                    <input type="password" name="new_password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Konfirmasi Password Baru</label>
                                    <input type="password" name="confirm_password" class="form-control">
                                </div>
                                <button class="btn btn-warning rounded-pill px-4">
                                    <i class="bi bi-lock me-1"></i> Ubah Password
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>