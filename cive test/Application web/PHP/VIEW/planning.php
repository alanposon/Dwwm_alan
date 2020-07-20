<?php

$planningAffichage = PlanningManager::getList();
$chantierAffichage = ChantierManager::getList();
$lvl = (isset($_SESSION['level'])) ? (int) $_SESSION['level'] : 2;
$id = (isset($_SESSION['id'])) ? (int) $_SESSION['id'] : 0;

$libellePlanning = (isset($_SESSION['libellePlanning'])) ? $_SESSION['libellePlanning'] : '';




$affichage = '<div class="planning">
    <table class=" color_line">
        <label for="mois">Planning du mois de : </label>

        <select name="mois" id="mois">
            <option value="Janvier">Janvier</option>
            <option value="Fevrier">Fevrier</option>
            <option value="Mars">Mars</option>
            <option value="Avril">Avril</option>
            <option value="Mai">Mai</option>
            <option value="Juin">Juin</option>
            <option value="Juillet">Juillet</option>
            <option value="Aout">Aout</option>
            <option value="Septembre">Septembre</option>
            <option value="Octobre">Octobre</option>
            <option value="Novembre">Novembre</option>
            <option value="Decembre">Decembre</option>

        </select>
        <div class="calendrier">
            <tr>
                <td>Lundi</td>
                <td>Mardi</td>
                <td>Mercredi</td>
                <td>Jeudi</td>
                <td>Vendredi</td>
                <td>Samedi</td>
                <td>Dimanche</td>
            </tr>
            <tr>
                <td>
                    <div class="numero">1</div><input type="message" value="Chantier 1020">
                </td>
                <td>
                    <div class="numero">2</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">3</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">4</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">5</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">6</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">7</div><input type="button" value="la definition ">
                </td>
            </tr>
            <tr>
                <td>
                    <div class="numero">8</div><input type="button" value="la definition ">
                </td>

                <td>
                    <div class="numero">9</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">10</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">11</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">12</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">13</div><input type="button" value="la definition ">
                </td>
            
                <td>
                    <div class="numero">14</div><input type="button" value="la definition ">
                </td>
            <tr>

                </td>
                <td>
                    <div class="numero">15</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">16</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">17</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">18</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">19</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">20</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">21</div><input type="button" value="la definition ">
                </td>
            <tr>
                <td>
                    <div class="numero">22</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">23</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">24</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">25</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">26</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">27</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">28</div><input type="button" value="la definition ">
                </td>
            <tr>
                <td>
                    <div class="numero">29</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">30</div><input type="button" value="la definition ">
                </td>
                <td>
                    <div class="numero">31</div><div></div>
                </td>
                <td>
                    <div class="numero"></div><input type="button" value="">
                </td>
                <td>
                    <div class="numero"></div><input type="button" value="">
                </td>
                <td>
                    <div class="numero"></div><input type="button" value="">
                </td>
                <td>
                    <div class="numero"></div><input type="button" value="">
                </td>
        </div>'; 

         if ($lvl > 2) {
            $affichage .='  <a class="bouton" href="index.php?action=planningForm&act=ajout">Ajoutez un évenement</a>';
        }
        
        $affichage .=
    '</table>
</div>';

echo $affichage ; 