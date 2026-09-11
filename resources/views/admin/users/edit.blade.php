<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

    <h1>Edit User</h1>

    <a href="{{ route('admin.users') }}">
        ← Kembali
    </a>

    <br><br>

    @if ($errors->any())

        <div style="color: red;">

            <strong>Terjadi kesalahan:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>

    @endif

    <form
        action="{{ route('admin.users.update', $user) }}"
        method="POST"
    >

        @csrf
        @method('PUT')

        <label>Nama</label>
        <br>

        <input
            type="text"
            name="name"
            value="{{ old('name', $user->name) }}"
            required
        >

        <br><br>

        <label>Email</label>
        <br>

        <input
            type="email"
            name="email"
            value="{{ old('email', $user->email) }}"
            required
        >

        <br><br>

        <label>Role</label>
        <br>

        <select name="role">

            <option
                value="user"
                {{ old('role', $user->role) === 'user' ? 'selected' : '' }}
            >
                User
            </option>

            <option
                value="admin"
                {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}
            >
                Admin
            </option>

        </select>

        <br><br>

        <label>Password Baru</label>
        <br>

        <input
            type="password"
            name="password"
            placeholder="Kosongkan jika tidak diubah"
        >

        <br><br>

        <button type="submit">
            Simpan Perubahan
        </button>

    </form>

</body>
</html>
