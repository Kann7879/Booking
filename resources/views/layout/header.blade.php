<div class="navbar-header">
  <div class="row align-items-center justify-content-between">
    <!-- Kiri: Hamburger -->
    <div class="col-auto">
      <button type="button" class="sidebar-toggle">
        <iconify-icon icon="heroicons:bars-3-solid" class="icon text-2xl"></iconify-icon>
      </button>
    </div>

    <!-- Kanan: Email, Notif, Avatar -->
    <div class="col-auto">
      <div class="d-flex flex-wrap align-items-center gap-3">
        
        <!-- Email -->
        <div class="dropdown">
          <button class="w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"
            type="button" data-bs-toggle="dropdown">
            <iconify-icon icon="mage:email" class="text-primary-light text-xl"></iconify-icon>
          </button>
          <!-- isi dropdown email -->
        </div>

        <!-- Notification -->
        <div class="dropdown">
          <button class="w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"
            type="button" data-bs-toggle="dropdown">
            <iconify-icon icon="iconoir:bell" class="text-primary-light text-xl"></iconify-icon>
          </button>
          <!-- isi dropdown notif -->
        </div>

        <!-- Avatar -->
        <div class="dropdown">
          <button class="d-flex justify-content-center align-items-center rounded-circle" type="button"
            data-bs-toggle="dropdown">
            <img src="assets/images/user.png" alt="image"
              class="w-40-px h-40-px object-fit-cover rounded-circle" />
          </button>
          <div class="dropdown-menu to-top dropdown-menu-sm">
            <div class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
              <div>
                <h6 class="text-lg text-primary-light fw-semibold mb-2">
                  Shaidul Islam
                </h6>
                <span class="text-secondary-light fw-medium text-sm"
                  >Admin</span
                >
              </div>
              <button type="button" class="hover-text-danger">
                <iconify-icon
                  icon="radix-icons:cross-1"
                  class="icon text-xl"
                ></iconify-icon>
              </button>
            </div>
            <ul class="to-top-list">
              <li>
                <a
                  class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                  href="view-profile.html"
                >
                  <iconify-icon
                    icon="solar:user-linear"
                    class="icon text-xl"
                  ></iconify-icon>
                  My Profile</a
                >
              </li>
              <li>
                <a
                  class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                  href="company.html"
                >
                  <iconify-icon
                    icon="icon-park-outline:setting-two"
                    class="icon text-xl"
                  ></iconify-icon>
                  Setting</a
                >
              </li>
              <li>
                <a
                  class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3"
                  href="javascript:void(0)"
                >
                  <iconify-icon
                    icon="lucide:power"
                    class="icon text-xl"
                  ></iconify-icon>
                  Log Out</a
                >
              </li>
            </ul>
                </div>
        </div>

      </div>
    </div>
  </div>
</div>
