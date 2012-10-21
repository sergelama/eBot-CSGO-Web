<div class="well">
    <h2>eBot-CSGO</h2>
    <p>Bienvenue sur le panel de l'eBot V3. Vous pouvez accédez aux différents matchs via le menu. Enjoy !</p>
</div>

<div class="row-fluid">
    <div class="span7">
        <h5>Listes des matchs en cours</h5>

        <table class="table table-striped table-condensed" style="font-size: 0.9em">
            <tbody>
                <?php foreach ($matchs as $match): ?>
                    <?php
                    $score1 = $match->getScoreA();
                    $score2 = $match->getScoreB();

                    \ScoreColorUtils::colorForScore($score1, $score2);

                    $team1 = $match->getTeamA();
                    $team2 = $match->getTeamB();
                    if ($match->getMap() && $match->getMap()->exists()) {
                        \ScoreColorUtils::colorForMaps($match->getMap()->getCurrentSide(), $team1, $team2);
                    }
                    ?>
                    <tr>
                        <td width="20"  style="padding-left: 10px;">
                            <span style="float:left">#<?php echo $match->getId(); ?></span>
                        </td>
                        <td width="100"  style="padding-left: 10px;">
                            <span style="float:left"><?php echo $team1; ?></span>
                        </td>
                        <td width="50" style="text-align: center;"><?php echo $score1; ?> - <?php echo $score2; ?></td>
                        <td width="100"><span style="float:right"><?php echo $team2; ?></span></td>
                        <td width="150" align="center">
                            <?php if ($match->getMap() && $match->getMap()->exists()): ?>
                                <?php echo $match->getMap()->getMapName(); ?>
                            <?php endif; ?>
                        </td>
                        <td width="120">
                            <?php echo $match->getIp(); ?>
                        </td>
                        <td width="50" align="center">
                            <?php if ($match->getEnable()): ?>
                                <?php if ($match->getStatus() == Matchs::STATUS_STARTING): ?>
                                    <?php echo image_tag("/images/icons/flag_blue.png"); ?>
                                <?php else: ?>
                                    <?php echo image_tag("/images/icons/flag_green.png"); ?>
                                <?php endif; ?>
                            <?php else:
                                ?>
                                <?php echo image_tag("/images/icons/flag_red.png"); ?>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="status status-<?php echo $match->getStatus(); ?>">
                                <?php echo $match->getStatusText(); ?>
                            </div>
                        </td>
                        <td style="padding-left: 3px;text-align:right;">
                            <a href="<?php echo url_for("matchs_view", $match); ?>"><button class="btn btn-inverse btn-mini">Voir</button></a>
                        </td>

                    </tr>
                <?php endforeach; ?>
                <?php if ($matchs->count() == 0): ?>
                    <tr>
                        <td colspan="8" align="center">Pas de résultats à afficher</td>
                    </tr>
                <?php endif; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="9" style="text-align: center;">
                        <a href="<?php echo url_for("matchs_current"); ?>">Voir tous les matchs</a>
                    </td>
                </tr>
            </tfoot>
            <thead>
                <tr>
                    <th>#ID</th>
                    <th colspan="3">Opposant - Score</th>
                    <th>Maps en cours</th>
                    <th>IP</th>
                    <th>Enabled</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="span5">
        <h5>Information</h5>
        <div class="well">
            <p><i class="icon-arrow-right"></i> La nouvelle version de l'eBot vous permet d'avoir accès à plus de statistiques sur les matchs mais aussi une meilleur gestion des matchs.</p>
            <p><i class="icon-arrow-right"></i> Si vous avez un problème avec l'eBot, nous vous invitons à lire l'aide.</p>
            <p><i class="icon-arrow-right"></i> Rendez-vous sur <a href="http://www.esport-tools.net/">eSport-tools.net</a> pour plus d'information !</p>
        </div>
    </div>
</div>