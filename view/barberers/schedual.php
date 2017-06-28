<h2>Mijn planning</h2>
<table class="table">
        <tr>
            <th >Datum</th>
            <th >Start tijd</th>
            <th >Eind tijd</th>
            <th >Klant naam</th>

            <th colspan="2">Actie</th>
        </tr>

        <?php
        if ($planning == false) {
            echo '<tr><td colspan="6">Geen data aanwezig.</td></tr>';

        } else {

            foreach ($planning as $plan) { ?>
                <tr>
                    <td><?= $plan['exam_name']; ?></td>
                    <td><?= $plan['date']; ?> <?= $plan['time']; ?></td>
                    <td><span class="label <?= $plan['status.class']; ?>"><?= $plan['status.name']; ?></span></td>
                    <?php if($plan['status_id']<3) { ?>
                        <td><a href="<?= URL ?>planning/confirm/<?= $plan['id'] ?>">Bevestig</a></td>
                        <td><a href="<?= URL ?>planning/reject/<?= $plan['id'] ?>">Weiger</a></td>
                    <?php } else { ?>
                        <td></td>
                        <td></td>
                    <?php } ?>

                    <td><span class="label <?= $plan['result.class']; ?>"><?= $plan['result.name']; ?></span></td>

                </tr>
            <?php }
        } ?>

</table>
<br>
<br>
<a href="<?= URL ?>barberers/create"><button class="btn btn-default" type="button" name="button">Maak een nieuwe afspraak mogenlijkheid</button></a>
