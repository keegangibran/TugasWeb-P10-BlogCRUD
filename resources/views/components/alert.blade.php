@if (session('success'))
    <div class="alert alert-success">
        <div class="alert-icon">✓</div>

        <div class="alert-content">
            <strong>Berhasil</strong>
            <span>{{ session('success') }}</span>
        </div>

        <button
            type="button"
            class="alert-close"
            onclick="this.parentElement.remove()"
            aria-label="Tutup notifikasi"
        >
            ×
        </button>
    </div>
@endif