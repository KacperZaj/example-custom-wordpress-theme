AOS.init({
  once: true,
});

window.addEventListener('scroll', () => {
  AOS.refresh();
});
window.addEventListener("DOMContentLoaded", () => {
  const section2Blocks = document.querySelectorAll(".js-section-2-block");

  const updateBlockHeights = () => {
    if (window.innerWidth > 992) {
      section2Blocks.forEach((block) => {
        if (block) {
          const blockTextField = block.querySelector(".js-block-text-field");
          const blockContent = block.querySelector(".js-block-content");

          if (blockTextField && blockContent) {
            const blockTextFieldHeight = blockTextField.offsetHeight;

            blockContent.style.transform = `translateY(${blockTextFieldHeight}px)`;

            block.addEventListener("mouseover", () => {
              blockContent.style.transform = `none`;
            });

            block.addEventListener("mouseout", () => {
              blockContent.style.transform = `translateY(${blockTextFieldHeight}px)`;
            });
          }
        }
      });
    } else {
      section2Blocks.forEach((block) => {
        const blockContent = block.querySelector(".js-block-content");
        if (blockContent) {
          blockContent.style.transform = ""; // Resetuje transformacje
        }
      });
    }
  };

  updateBlockHeights();

  window.addEventListener("resize", () => {
    updateBlockHeights();
  });

  // Navigation scroll
  const nav = document.querySelector(".nav");

  if (nav) {
    const navHeight = nav.offsetHeight;

    const handleNav = () => {
      let scrolled = window.scrollY;

      if (scrolled > navHeight) {
        nav.classList.add("translated");
      } else {
        nav.classList.remove("translated");
      }

      if (scrolled > 2 * navHeight) {
        nav.classList.add("fixed");
      } else {
        nav.classList.remove("fixed");
      }
    };

    document.addEventListener("scroll", () => {
      handleNav();
    });

    handleNav();
  }

  // END Navigation scroll

  // Burger menu
  const burger = document.querySelector(".js-burger");
  const mobileNav = document.querySelector(".js-mobile-nav");
  const burgerIcon = document.querySelector(".js-burger-icon");

  if (burger && mobileNav && burgerIcon) {
    const handleMobileNav = () => {
      mobileNav.classList.toggle("active");
    };

    burger.addEventListener("click", () => {
      handleMobileNav();
    });

    window.addEventListener("scroll", () => {
      mobileNav.classList.remove("active");
      burgerIcon.classList.remove("opened");
    });
  }

  // END Burger menu
});

// Section 4 - FAQ
jQuery(document).ready(function($) {
  const $faqItems = $('.js-faq-item');

  $faqItems.find('.js-faq-content').hide();

  $faqItems.find('.js-faq-top').on('click', function() {
      const $clickedItem = $(this).closest('.js-faq-item');
      const $content = $clickedItem.find('.js-faq-content');

      if ($clickedItem.hasClass('active')) {
          $content.slideUp(300);
          $clickedItem.removeClass('active');
      } else {
          $faqItems.not($clickedItem).removeClass('active').find('.js-faq-content').slideUp(300);

          $content.slideDown(300);
          $clickedItem.addClass('active');
      }
  });

  const $firstItem = $faqItems.first();
  $firstItem.addClass('active').find('.js-faq-content').show();
});

// END Section 4 - FAQ
