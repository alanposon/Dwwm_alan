<?php

$planningAffichage = PlanningManager::getList();
$chantierAffichage = ChantierManager::getList();
$lvl = (isset($_SESSION['level'])) ? (int) $_SESSION['level'] : 2;
$id = (isset($_SESSION['id'])) ? (int) $_SESSION['id'] : 0;

$libellePlanning = (isset($_SESSION['libellePlanning'])) ? $_SESSION['libellePlanning'] : '';




$affichage = '<div class="planning bas">
    <table class=" color_line">
        <label for="mois"><h2>Planning du mois de : <h2></label>

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
                    <div class="numero">1</div> 
                    <div class="contenuePla"> 301525 <br> chantier soudure <br>
                   435 route de bierne <br> Dunkerque  </div>
                </td>
                <td>
                    <div class="numero">2</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>    </td>
                <td>
                    <div class="numero">3</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div></td>
                <td>
                    <div class="numero">4</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div> </td>
                <td>
                    <div class="numero">5</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div> </td>
                <td>
                    <div class="numero">6</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div></td>
                <td>
                    <div class="numero">7</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div> </td>
            </tr>
            <tr>
                <td>
                    <div class="numero">8</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div> </td>

                <td>
                    <div class="numero">9</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div> </td>
                <td>
                    <div class="numero">10</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div> </td>
                <td>
                    <div class="numero">11</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>    </td>
                <td>
                    <div class="numero">12</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>         </td>
                <td>
                    <div class="numero">13</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div> </td>
            
                <td>
                    <div class="numero">14</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>     </td>
            <tr>

                </td>
                <td>
                    <div class="numero">15</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div> </td>
                <td>
                    <div class="numero">16</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div> </td>
                <td>
                    <div class="numero">17</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>   </td>
                <td>
                    <div class="numero">18</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>  </td>
                <td>
                    <div class="numero">19</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div> </td>
                <td>
                    <div class="numero">20</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>  </td>
                <td>
                    <div class="numero">21</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>   </td>
            <tr>
                <td>
                    <div class="numero">22</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>    </td>
                <td>
                    <div class="numero">23</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>  </td>
                <td>
                    <div class="numero">24</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>   </td>
                <td>
                    <div class="numero">25</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>   </td>
                <td>
                    <div class="numero">26</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>    </td>
                <td>
                    <div class="numero">27</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>   </td>
                <td>
                    <div class="numero">28</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>    </td>
            <tr>
                <td>
                    <div class="numero">29</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>    </td>
                <td>
                    <div class="numero">30</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div>  </td>
                <td>
                    <div class="numero">31</div><div class="contenuePla"> 301525 <br> chantier soudure <br>
                    435 route de bierne <br> Dunkerque  </div> 
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
    $affichage .= '  <a class="bouton" href="index.php?action=planningForm&act=ajout">Ajoutez un évenement</a>';
}

$affichage .=
    '</table>
</div>';

echo $affichage;
