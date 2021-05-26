<section class="panel">
    <header>
        <h2>داشبورد</h2>
    </header>
    <main>
        <?php $alerts = Alert::alerts();
        if ($alerts) echo $alerts; ?>
    </main>
</section>