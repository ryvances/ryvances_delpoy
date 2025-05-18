<?php echo wp_nav_menu(
  array(
    'theme_location' => 'primary',
    'depth' => 2,
    'container_id' => 'id-nav-container',
    'container' => 'nav',
    'container_class' => '',
    'menu_class' => '',
    'walker'         => new Custom_Walker_Nav_Menu()
  )
);
?>
<style>
  /* ---------- Menu 1 ---------- */
  @media (min-width: 1024px) {
    #id-nav-container {

      #menu-primary-menu {
        display: flex;
        justify-content: space-between;
        align-items: center;

        >div:not(.menu-item-has-children) {
          position: relative;
          display: inline-block;
          width: fit-content;
          padding: 26px 16px;

          >a {
            display: block;
            padding: 8px 0;
            font-size: 18px;
            font-weight: 600;
            color: #444444;
            text-decoration: none;
            transition: .4s ease all;
            position: relative;

            &:after {
              content: '';
              position: absolute;
              bottom: 0;
              left: 0;
              height: 2px;
              width: 0%;
              background: linear-gradient(94.05deg, #7900ff -2.08%, #381ee5 106.23%);
              transition: .4s ease all;
            }

            &:hover::after {
              width: 100%;
            }
          }
        }

        >div.menu-item-has-children {
          position: relative;
          display: inline-block;
          width: fit-content;
          padding: 26px 16px;

          >a {
            display: flex;
            align-items: center;
            gap: 4px;
            padding: 8px 0;
            font-size: 18px;
            font-weight: 600;
            color: #444444;
            text-decoration: none;
            position: relative;

            &::after {
              content: '';
              display: inline-block;
              width: 20px;
              height: 20px;
              background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor'%3E%3Cpath fill-rule='evenodd' d='M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z' clip-rule='evenodd'%3E%3C/path%3E%3C/svg%3E");
              background-size: contain;
              background-repeat: no-repeat;
            }
          }
        }
      }


      /* ---------- Menu 2 ---------- */
      .menu-item-has-children {
        position: relative;
        cursor: pointer;
        transition: .4s ease all;

        &:hover {
          .sub-menu {
            display: block;
          }

          >a::after {
            transform: rotate(180deg);
            transition: .4s ease all;
          }
        }
      }

      .sub-menu {
        display: none;
        position: absolute;
        top: 80%;
        left: 16px;
        width: 220px;
        background: linear-gradient(94.05deg, #7900ff -2.08%, #381ee5 106.23%);
        border: none;
        background-clip: padding-box;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);

        >div {
          cursor: pointer !important;
          overflow: hidden;
          border: 2px solid transparent;
          transition: transform 0.4s ease;

          &:hover {
            background: #fff;
            border: 2px solid #fff;
            transform: translateX(4px);

            >a {
              color: #444444;
            }
          }
        }

        >div>a {
          display: block;
          color: #fff;
          padding: 6px 14px;
          text-decoration: none;
          font-size: 16px;
          border: none;
        }
      }
    }
  }

  @media (max-width: 1024px) {
    #id-nav-container {
      display: none;
      position: fixed;
      z-index: 99;
      inset: 0;
      padding: 10px 16px;

      #menu-primary-menu {
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: center;
        gap: 8px;

        >div {
          width: 100%;

          >a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 0;
            font-size: 18px;
            font-weight: 600;
            color: #fff;
            text-decoration: none;
          }
        }

        >div.menu-item-has-children {
          >a {
            position: relative;

            &::after {
              content: '';
              display: inline-block;
              width: 24px;
              height: 24px;
              background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='white'%3E%3Cpath fill-rule='evenodd' d='M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z' clip-rule='evenodd'%3E%3C/path%3E%3C/svg%3E");
              background-size: contain;
              background-repeat: no-repeat;
              transition: transform 0.3s ease;
              margin-left: 40px;
            }
          }

          &.active {
            >a::after {
              transform: rotate(180deg);
            }
          }
        }
      }


      /* ---------- Menu 2 ---------- */
      .menu-item-has-children {
        cursor: pointer;
      }

      .sub-menu {
        max-height: 0;
        overflow: hidden;
        transition: .4s ease-in-out all;

        &.active {
          max-height: 100%;
        }

        >div>a {
          display: block;
          color: #fff;
          padding: 8px 16px;
          text-decoration: none;
          font-size: 18px;
          border: none;
          width: fit-content;
        }
      }
    }
  }
</style>