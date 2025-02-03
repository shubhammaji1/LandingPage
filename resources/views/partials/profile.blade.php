<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="mb-4">User Profile</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/default-avatar.png') }}" alt="Profile Picture" class="img-fluid rounded-circle mb-3" width="150">
                <h4>{{ $user->name }}</h4>
                <p class="text-muted">{{ $user->email }}</p>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <tr>
                        <th>Name:</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Account Created:</th>
                        <td>{{ $user->created_at->format('d M Y') }}</td>
                    </tr>
                </table>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>