<div style="padding: 10px">
    <div style="font-size: 24px; font-weight: bold;">
        BeeFlix
    </div>
    <div style="display: flex; align-items: center;">
        <a onclick="history.back()">
            <button style="height: 30px; background-color: darkgrey; border: 1px darkgray solid">
                <div style="color: white; background-color: darkgrey; display: flex; align-items: center; justify-content: space-between;">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                    </svg>
                    Kembali
                </div>
            </button>
        </a>
        <a href="{{ url('/') }}">
            <button style="height: 30px; color: darkgrey; background-color: white; border: 1px darkgray solid">
                <div>
                    LIHAT SEMUA FILM
                </div>
            </button>
        </a>
    </div>
</div>