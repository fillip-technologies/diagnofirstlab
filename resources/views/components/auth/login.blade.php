<div class="min-h-screen flex items-center justify-center relative overflow-hidden px-4">

    <!-- Decorative Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-100 via-blue-50 to-slate-200"></div>
    <div class="absolute -top-32 -left-32 w-96 h-96 bg-primaryFrom/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-32 -right-32 w-96 h-96 bg-secondaryFrom/10 rounded-full blur-3xl"></div>

    <!-- Auth Card -->
    <div class="relative w-full max-w-md backdrop-blur-xl bg-white/90 rounded-2xl shadow-2xl overflow-hidden">

        <!-- Header -->
        <div class="px-6 py-5 border-b">
            <h1 class="text-lg font-semibold text-gray-800 tracking-wide">
                Diagno First Lab
            </h1>
            <p class="text-xs text-gray-500 mt-1">
                Every Life Is Precious
            </p>
        </div>

        <!-- Tabs -->
        <div class="px-6 pt-4">
            <div class="grid grid-cols-4 bg-gray-100 rounded-lg p-1 text-xs font-medium">
                <button onclick="setRole('employee')" id="tab-employee"
                    class="py-2 rounded-md bg-white text-primaryFrom shadow">
                    Employee
                </button>
                <button onclick="setRole('center')" id="tab-center"
                    class="py-2 rounded-md text-gray-500 hover:text-primaryFrom">
                    Center
                </button>
                <button onclick="setRole('member')" id="tab-member"
                    class="py-2 rounded-md text-gray-500 hover:text-primaryFrom">
                    Member
                </button>
                <button onclick="setRole('doctor')" id="tab-doctor"
                    class="py-2 rounded-md text-gray-500 hover:text-primaryFrom">
                    Doctor
                </button>
            </div>
        </div>

        <!-- Form -->
        <div class="px-6 py-6">
            <h2 id="formTitle" class="text-xl font-semibold text-gray-900">
                Employee Login
            </h2>
            <p id="formDesc" class="text-sm text-gray-500 mb-6">
                Access your HRMS account
            </p>

            <form class="space-y-4">
                <div>
                    <label class="text-xs font-medium text-gray-600">Email / ID</label>
                    <input type="text"
                        class="w-full mt-1 px-4 py-2.5 border rounded-lg text-sm
                               focus:ring-2 focus:ring-primaryFrom/40 focus:outline-none">
                </div>

                <div>
                    <label class="text-xs font-medium text-gray-600">Password</label>
                    <input type="password"
                        class="w-full mt-1 px-4 py-2.5 border rounded-lg text-sm
                               focus:ring-2 focus:ring-primaryFrom/40 focus:outline-none">
                </div>

                <button id="submitBtn"
                    class="w-full py-2.5 rounded-lg text-white font-medium tracking-wide
                           bg-gradient-to-r from-primaryFrom to-primaryTo shadow-md hover:shadow-lg transition">
                    Login
                </button>
            </form>

            <div class="mt-6 text-center text-sm text-gray-600">
                <span id="toggleText">Don’t have an account?</span>
                <button onclick="toggleAuth()"
                    class="ml-1 font-medium text-primaryFrom hover:underline"
                    id="toggleBtn">
                    Sign up
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    let currentRole = 'employee';
    let isLogin = true;

    const roles = {
        employee: {
            title: 'Employee',
            desc: 'Access your HRMS account',
            colorFrom: 'from-primaryFrom',
            colorTo: 'to-primaryTo'
        },
        center: {
            title: 'Center / Lab',
            desc: 'Manage diagnostic operations',
            colorFrom: 'from-secondaryFrom',
            colorTo: 'to-secondaryTo'
        },
        member: {
            title: 'Member',
            desc: 'View reports & appointments',
            colorFrom: 'from-primaryFrom',
            colorTo: 'to-primaryTo'
        },
        doctor: {
            title: 'Doctor',
            desc: 'Access patient records',
            colorFrom: 'from-secondaryFrom',
            colorTo: 'to-secondaryTo'
        }
    };

    function setRole(role) {
        currentRole = role;

        // Reset all tabs
        document.querySelectorAll('[id^="tab-"]').forEach(tab => {
            tab.className = 'py-2 rounded-md text-gray-500 hover:text-primaryFrom';
        });

        // Activate selected tab
        document.getElementById(`tab-${role}`).className =
            'py-2 rounded-md bg-white text-primaryFrom shadow';

        updateUI();
    }

    function toggleAuth() {
        isLogin = !isLogin;
        updateUI();
    }

    function updateUI() {
        const r = roles[currentRole];

        document.getElementById('formTitle').innerText =
            `${r.title} ${isLogin ? 'Login' : 'Sign Up'}`;

        document.getElementById('formDesc').innerText = r.desc;

        const btn = document.getElementById('submitBtn');
        btn.innerText = isLogin ? 'Login' : 'Create Account';
        btn.className =
            `w-full py-2.5 rounded-lg text-white font-medium tracking-wide
         bg-gradient-to-r ${r.colorFrom} ${r.colorTo}
         shadow-md hover:shadow-lg transition`;

        document.getElementById('toggleText').innerText =
            isLogin ? 'Don’t have an account?' : 'Already have an account?';

        document.getElementById('toggleBtn').innerText =
            isLogin ? 'Sign up' : 'Login';
    }
</script>