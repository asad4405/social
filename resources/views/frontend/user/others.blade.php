<style>
    body {
        background-color: #000;
        color: #fff;
    }

    /* Sidebar left user list */
    .user-list {
        height: 100vh;
        overflow-y: auto;
        border-right: 1px solid #333;
    }

    /* Right message/chat area */
    .chat-area {
        height: 100vh;
        overflow-y: auto;
    }

    .user-item {
        display: flex;
        align-items: center;
        padding: 12px;
        border-bottom: 1px solid #222;
        cursor: pointer;
    }

    .user-item:hover {
        background-color: #111;
    }

    .user-item img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        margin-right: 10px;
        object-fit: cover;
    }

    .popup-message {
        position: fixed;
        bottom: 80px;
        right: 20px;
        width: 300px;
        max-height: 400px;
        background: #1c1c1c;
        border-radius: 10px;
        overflow-y: auto;
        z-index: 9999;
        box-shadow: 0 0 10px #000;
        display: none;
    }

    .popup-message-header {
        padding: 10px;
        background: #2a2a2a;
        font-weight: bold;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .popup-user {
        padding: 10px;
        display: flex;
        align-items: center;
        border-bottom: 1px solid #333;
    }

    .popup-user img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
        object-fit: cover;
    }

    .message-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 999;
        background-color: #262626;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        font-size: 20px;
        color: #fff;
    }

    @media (max-width: 992px) {
        .user-list {
            display: none;
        }

        .chat-area {
            width: 100%;
        }
    }
</style>

<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar: User List (PC Only) -->
        <div class="col-lg-3 user-list d-none d-lg-block">
            <input type="text" class="mx-2 my-3 text-white form-control bg-dark" placeholder="Search">

            <!-- User Items (You can loop dynamically) -->
            <div class="user-item">
                <img src="https://via.placeholder.com/45" alt="">
                <div>
                    <strong>mdimrulkabbo</strong><br>
                    <small class="text-muted">Follows you</small>
                </div>
                <span class="text-white ms-auto">✔️</span>
            </div>

            <div class="user-item">
                <img src="https://via.placeholder.com/45" alt="">
                <div>
                    <strong>alvihasan330</strong><br>
                    <small class="text-muted">Follows you</small>
                </div>
                <span class="text-white ms-auto">✔️</span>
            </div>

            <div class="user-item">
                <img src="https://via.placeholder.com/45" alt="">
                <div>
                    <strong>arshualive</strong><br>
                    <small class="text-muted">Suggested for you</small>
                </div>
                <span class="text-white ms-auto">✔️</span>
            </div>

            <!-- Add more .user-item as needed -->
        </div>

        <!-- Right Main Chat Area -->
        <div class="p-3 col-lg-9 col-12 chat-area">
            <h5 class="mb-3">Messages</h5>
            <div class="user-item">
                <img src="https://via.placeholder.com/45" alt="">
                <div>
                    <strong>Md Imrul Kausar Kabbo</strong><br>
                    <small class="text-muted">Active 17h ago</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bottom-right Message Button (Only PC) -->
<button class="message-btn d-none d-lg-block" onclick="togglePopup()">💬</button>

<!-- Message Popup -->
<div class="popup-message" id="popupMessage">
    <div class="popup-message-header">
        <span>Messages</span>
        <button class="btn btn-sm btn-close btn-close-white" onclick="togglePopup()"></button>
    </div>
    <!-- Popup Chat Users -->
    <div class="popup-user">
        <img src="https://via.placeholder.com/40" alt="">
        <div>
            <strong>Md Imrul Kausar Kabbo</strong><br>
            <small class="text-muted">Active 17h ago</small>
        </div>
    </div>

    <!-- Add more .popup-user for more messages -->
</div>

<!-- JS -->
<script>
    function togglePopup() {
        const popup = document.getElementById('popupMessage');
        popup.style.display = (popup.style.display === 'block') ? 'none' : 'block';
    }
</script>






















{{-- index --}}

<div class="container">
    <div class="col-lg-9 offset-lg-3 content">
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <div>
                <h6 class="mb-0">Find friends and accounts you like</h6>
                <small class="text-muted">Try following 5 or more accounts for a personalized experience.</small>
            </div>
            <button class="btn btn-primary btn-sm">Next</button>
        </div>

        <div class="mb-3 search-bar">
            <input type="text" class="rounded form-control" placeholder="Search" />
        </div>

        <!-- User List -->
        <div class="user-item">
            <img src="https://via.placeholder.com/50" alt="" />
            <div class="user-info">
                <strong>mdimrulkabbo</strong><br />
                <small class="text-muted">Md Imrul Kausar Kabbo</small><br />
                <small class="text-muted">Follows you</small>
            </div>
            <div class="tick-icon">&#10003;</div>
        </div>

        <div class="user-item">
            <img src="https://via.placeholder.com/50" alt="" />
            <div class="user-info">
                <strong>alvihasan330</strong><br />
                <small class="text-muted">Alvi Islam</small><br />
                <small class="text-muted">Follows you</small>
            </div>
            <div class="tick-icon">&#10003;</div>
        </div>

        <div class="user-item">
            <img src="https://via.placeholder.com/50" alt="" />
            <div class="user-info">
                <strong>arshualive</strong><br />
                <small class="text-muted">Arisha 🎀</small><br />
                <small class="text-muted">Suggested for you</small>
            </div>
            <div class="tick-icon">&#10003;</div>
        </div>

        <div class="user-item">
            <img src="https://via.placeholder.com/50" alt="" />
            <div class="user-info">
                <strong>your_sultan000</strong><br />
                <small class="text-muted">Tipu Sultan</small><br />
                <small class="text-muted">Suggested for you</small>
            </div>
            <div class="tick-icon">&#10003;</div>
        </div>

        <!-- Add more users as needed -->
    </div>
</div>
