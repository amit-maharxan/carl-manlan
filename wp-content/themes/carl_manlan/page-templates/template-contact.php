<?php
/**
 * Template Name: Contact Layout
 */

do_action('carl_header'); ?>

<section class="relative">
        <div
          class="hexBg pattern1 bgEffect linear-grad-mask absolute inset-0 z-0 after:z-0 after:blocsk after:inset-0 after:absolute after:bg-linear-to-b after:from-transparent after:via-dark/40 after:via-80% after:to-dark"
          data-gradX="0.8"
          data-gradSize="farthest-corner"
          data-gradY="0"></div>
        <div class="titleDiv relative pb-10 pt-[max(4rem,_30vh)]">
          <h1 class="text-4xl font-bold w-full text-light text-center">
            Get In Touch
          </h1>
        </div>
      </section>

      <!-- form -->
      <section class="uppercase font-medium bg-dark text-light/75 py-20">
        <div class="container">
          <form class="flex flex-col gap-6 max-w-[44rem] mx-auto">
            <div class="grid md:grid-cols-2 gap-6">
              <div class="formGrp grid gap-2 w-full">
                <label for="first-name">First Name*</label>
                <input
                  required
                  class="rounded-full bg-light/25 px-8 py-4"
                  id="first-name"
                  type="text" />
              </div>
              <div class="formGrp grid gap-2 w-full">
                <label for="last-name">Last Name*</label>
                <input
                  required
                  class="rounded-full bg-light/25 px-8 py-4"
                  id="last-name"
                  type="text" />
              </div>
            </div>
            <div class="formGrp grid gap-2 w-full">
              <label for="email">Email Address*</label>
              <input
                required
                class="rounded-full bg-light/25 px-8 py-4"
                id="email"
                type="email" />
            </div>
            <div class="formGrp grid gap-2 w-full">
              <label for="message">Message*</label>
              <textarea
                required
                class="rounded-md bg-light/25 px-8 py-4"
                id="message"
                rows="10">
              </textarea>
            </div>
            <button
              type="submit"
              class="btn-primary hover:!text-primary">
              Get In Touch
            </button>
          </form>
        </div>
      </section>

<?php do_action('carl_footer'); ?>