<style>
.button {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 6px 12px;
    gap: 8px;
    height: 36px;
    width: 145px;
    border: none;
    background: #5e41de33;
    border-radius: 20px;
    cursor: pointer;
}

.label {
    line-height: 20px;
    font-size: 17px;
    color: #5D41DE;
    font-family: sans-serif;
    letter-spacing: 1px;
}

.button:hover {
    background: #5e41de4d;
}

.button:hover .svg-icon {
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

.svg-icon {
    width: 20px;
    height: 20px;
}
#userDropdown img:hover {
    transform: scale(1.2);  
    transition: transform 0.5s ease;  
}
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="/" class="button nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" height="30" fill="none" class="svg-icon">
                <g stroke-width="1.5" stroke-linecap="round" stroke="#5d41de">
                    <circle r="2.5" cy="10" cx="10"></circle>
                    <path fill-rule="evenodd" d="m8.39079 2.80235c.53842-1.51424 2.67991-1.51424 3.21831-.00001.3392.95358 1.4284 1.40477 2.3425.97027 1.4514-.68995 2.9657.82427 2.2758 2.27575-.4345.91407.0166 2.00334.9702 2.34248 1.5143.53842 1.5143 2.67996 0 3.21836-.9536.3391-1.4047 1.4284-.9702 2.3425.6899 1.4514-.8244 2.9656-2.2758 2.2757-.9141-.4345-2.0033.0167-2.3425.9703-.5384 1.5142-2.67989 1.5142-3.21831 0-.33914-.9536-1.4284-1.4048-2.34247-.9703-1.45148.6899-2.96571-.8243-2.27575-2.2757.43449-.9141-.01669-2.0034-.97028-2.3425-1.51422-.5384-1.51422-2.67994.00001-3.21836.95358-.33914 1.40476-1.42841.97027-2.34248-.68996-1.45148.82427-2.9657 2.27575-2.27575.91407.4345 2.00333-.01669 2.34247-.97026z" clip-rule="evenodd"></path>
                </g>
            </svg>
            <span class="label">Comproller</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/">Kezdőlap</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="/hr">Menü</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/penzugy">Menü</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Eszköztár2
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                @endauth
            </ul>
            @guest
            <div class="d-flex ms-auto">
                <a href="/bejelentkezes" class="btn btn-outline-primary">Bejelentkezés</a>
            </div>
            @endguest
        </div>
    </div>
</nav>
