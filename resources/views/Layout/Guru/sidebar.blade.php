<div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="briefcase-outline"></ion-icon>
                    </span>
                    <span class="title">QurData</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard/Guru')}}">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('guru/absensi')}}">
                    <span class="icon">
                        <ion-icon name="document-outline"></ion-icon>
                    </span>
                    <span class="title">Absensi Murid</span>
                </a>
            </li>

            <li>
                <a href="{{ route('guru/capaian')}}">
                    <span class="icon">
                        <ion-icon name="stats-chart-outline"></ion-icon>
                    </span>
                    <span class="title">Capaian</span>
                </a>
            </li>

            <li>
                <a href="{{ route('guru/datamurid')}}">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Data Murid</span>
                </a>
            </li>

            <li>
                <a href="{{ route('guru/setting')}}">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="title">Setelan</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title" id="log_out">Keluar</span>
                </a>
            </li>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Keluar</button>
            </form>
            
        </ul>
    </div>