      <footer class="footer">
        <section class="footer-top">
          <div class="footer-upper">
            <?=get_field('address', 'option'); ?>
            <img src="<?=get_field('footer_logo', 'option'); ?>" alt="">
            <div class="footer-contact">
              <p class="footer-phone"><?=get_field('phone', 'option'); ?></p>
            </div>
          </div>
          <div class="footer-lower">
            <p><?=get_field('disclaimers', 'option'); ?></p>
          </div>
        </section>
        <section class="jlb">
          <p><a href="http://www.jlbworks.com/#latest-work">Web Design</a>, <a href="http://www.jlbworks.com/#services">Marketing</a> & <a href="http://www.jlbworks.com/#contact">Support</a> by <a href="http://www.jlbworks.com/#latest-work">JLB</a></p>
        </section>
        <?php wp_footer(); ?>
      </footer>
    </div> <!-- Closing Header Container -->
  </body>
</html>
