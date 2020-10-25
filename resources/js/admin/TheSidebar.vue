<template>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/adminlte/dist/img/AdminLTELogo.png" alt="Site Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img :src="user.profileImage" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ user.name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item " >
            <router-link :to="{ name: 'Dashboard' }" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas"></i>
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/admin/users" class="nav-link">
              <i class="nav-icon fas fa-users fa-alt"></i>
              <p>
                Users
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/admin/posts" class="nav-link">
              <i class="nav-icon fa fa-address-card"></i>
              <p>
                Posts
              </p>
            </router-link>
          </li>
          <li class="nav-item has-treeview">
            <a class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/admin/settings/categories" class="nav-link">
                  <i class="nav-icon fas fa-list-alt fa-alt"></i>
                  <p>
                    Categories
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/admin/settings/units" class="nav-link">
                  <i class="nav-icon fas fa-balance-scale-right"></i>
                  <p>
                    Units
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/admin/settings/categories" class="nav-link">
                  <i class="nav-icon fas fa-copyright"></i>
                  <p>
                    Brands
                  </p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/admin/settings/categories" class="nav-link">
                  <i class="nav-icon fas fa-copyright"></i>
                  <p>
                    Processor Types
                  </p>
                </router-link>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <router-link to="/admin/reports" class="nav-link">
              <i class="nav-icon fas fa-flag"></i>
              <p>
                Reports
                <span class="right badge badge-danger">New</span>
              </p>
            </router-link>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</template>

<script>
export default {
    created() {
        // console.log('erro' + this.$store.getters.loggedIn)
        if (this.loggedIn) {
            this.$store.dispatch('auth/getUser', localStorage.getItem('access_token'));
        }
    },
    computed: {
        loggedIn() {
            return this.$store.getters['auth/check']
        },

        user() {
            return this.$store.getters['auth/user']
        },
    },
}
</script>