<!-- <div class="widget p-4 mb-5">
    <h3>Kategorije</h3>
    <ul class="list-unstyled">
        <li><a href=""></a><a href="">Roleri</a></li>
        <li><a href="">Biciklizam</a></li>
        <li><a href="">Planinarenja</a></li>
        <li><a href="">Setnja</a></li>
        <li><a href="">Trcanje</a></li>
    </ul>
</div>

<div class="widget p-4 mb-5">
    <h3>Posljednje sa bloga</h3>
    <ul class="list-unstyled">
        <li><a href="">Kupovina rolera</a></li>
        <li><a href="">Biciklizam</a></li>
        <li><a href="">Planinarenja na Čvrsnici</a></li>
        <li><a href="">Setnja</a></li>
        <li><a href="">Kako istrčati maraton</a></li>
    </ul>
</div> -->

<?php if(is_active_sidebar('sidebar')) : ?>
    <?php dynamic_sidebar('sidebar'); ?>
<?php endif; ?>