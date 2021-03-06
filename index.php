<?php

  if(isset($_POST['all_data'])){
      $to = "admin@gmail.com"; // write here your email address
      $subject = "This is test subject"; // write here the subject
      $message = "
                  <html>
                  <head>
                    <title>This is test title</title>
                  </head>
                  <body>
                    <p>Here is some informative message !</p>
                    <table>
                      <tr>
                        <th>Your data</th>
                      </tr>
                      <tr>
                      "
                      . "<td>" . $_POST['all_data'] . "</td>" .
                      "
                      </tr>
                    </table>
                  </body>
                  </html>
                ";

      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= 'From: <user@gmail.com>' . "\r\n";
      $headers .= 'Cc: user@gmail.com' . "\r\n";

      mail($to, $subject, $message, $headers);
  }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanilla JavaScript Chat Bot - Fiver Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://raw.githack.com/SortableJS/Sortable/master/Sortable.js"></script>
    <link href="https://scriptedconsultancy.com/css/materialize_tool.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/vis-network/standalone/umd/vis-network.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/shepherd.js@5.0.1/dist/js/shepherd.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
</head>
<body>
<script type="text/javascript">
    var myData = {
      "nData": [],
      "eData": []
    }
    var nodeID = myData.nData.length + 1;
    var edgeID = myData.eData.length + 1;
    var nodes = new vis.DataSet([]);
    var edges = new vis.DataSet([]);
</script>
    <section class="msger">
      <header class="msger-header">
        <div class="msger-header-title">
          <i class="fas fa-robot"></i>
          Vanilla JavaScript Chat Bot 
          <!-- Modal Trigger -->
          <button data-target="myModal" class="btn modal-trigger">Begin de Tour</button>
        </div>
        <div class="msger-header-options" onclick="window.location.reload();">
          <span><i class="fas fa-sync-alt"></i></span>
        </div>
      </header>
      <main class="msger-chat">
        <div class="msg left-msg" id="askNameDiv">
          <div class="modal fade" id="myModal">
            <div class="row">
              <div id="dialog_breed" class="modal-dialog"  width="100%">
                <div class="modal-content">
                  <div class="col s12 m12">
                    <div class="modal-header">
                      <h4 class="modal-title">Instructies</h4>
                    </div>
                  </div>
                  <div class="col s12 m6">
                    <div class="modal-body">
                      <p id="intro_groot">In deze stap kunt u aangeven welke activiteiten nodig zijn om {{Product_1_Naam}} te maken.<br>
                        <br>
                        In het voorbeeld rechts ziet u een voorbeeld van een activiteitenoverzicht. Let op de manier waarop deze activiteiten met elkaar verbonden zijn. De pijlen wijzen naar de volgende stap.<br>
                        <br>
                        Aan u de taak om dit voor uw eigen activiteiten te doen. Wanneer u op de knop "BEGINNEN" klikt, verdwijnt dit voorbeeld en komt de interface tevoorschijn.
                      </p>
                      <p id="intro_klein">In deze stap kunt u aangeven welke activiteiten nodig zijn om {{Product_1_Naam}} te maken.<br>
                        <br>
                        In het voorbeeld hier onder ziet u een voorbeeld van een activiteitenoverzicht. Let op de manier waarop deze activiteiten met elkaar verbonden zijn. De pijlen wijzen naar de volgende stap.<br>
                        <br>
                        Aan u de taak om dit voor uw eigen activiteiten te doen. Wanneer u op de knop "BEGINNEN" klikt, verdwijnt dit voorbeeld en komt de interface tevoorschijn.
                      </p>
                      <button class="btn blue modal-close" data-dismiss="modal" id="reset" onclick="starttour()" type="button">BEGINNEN</button>
                    </div>
                  </div>
                  <div class="col s12 m6">
                    <img src="https://scriptedconsultancy.com/Procesoverzicht.png" alt="Italian Trulli" width="80%">
                  </div>
                  <div class="col s12 m12 left">
                    <div class="modal-footer left">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <script>
            document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.tooltipped');
            var instances = M.Tooltip.init(elems, options);
            });
            function chipAddCallback() {
            }
            document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.chips');
            var instances = M.Chips.init(elems, {
            autocompleteOptions: {
            data: doStuff(),
            limit: Infinity,
            minLength: 1
            },
            placeholder: "Geef de uitvoerders op",
            secondaryPlaceholder: "+Nieuwe Uitvoerder",
            onChipAdd: chipAddCallback,
            });
            });
            document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.selecties');
            var instances = M.FormSelect.init(elems, options);
            });
            document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems, options);
            });
            document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems, options);
            });
            document.addEventListener('DOMContentLoaded', function () {
            var Modalelem = document.querySelector('.intromodal');
            var instance = M.Modal.init(Modalelem);
            instance.open();
            });
          </script>        
          <div class="row">
            <div class="col s12 m6">
              <div id="mynodeform">
                <p class="show-mobile">U vindt in deze mobiele weergave een voorbeeld van uw activiteitenoverzicht onderaan de pagina.</p>
                <h5 class="heading" id="first-element-introduction">Geef alle activiteiten op</h5>
                <div>
                  <!-- First Div -->
                  <div class="col s12 m112" id="second-element-introduction">
                    <label class="col-sm-2 col-form-label black-text" for="">Naam Activiteit</label>
                    <a href="#" title="Tooltip here"></a> <input class="form-control tooltipped" data-position="bottom" data-tooltip="Geef op hoe u deze activiteit benoemt"  id="inputNode" name="inputNode" onkeyup="myFunction()" onchange="showButton()" placeholder="Geef op hoe u deze activiteit benoemt" type="text"> <small class="text-danger red-text" id="inputNodeError"></small>
                  </div>
                  <div class="col s12 m12" id="third-element-introduction">
                    <label class="col-sm-2 col-form-label black-text" for="inputUitvoerder">Uitvoerders van activiteit</label>
                    <div class="chips chips-moin">
                      <input class="" id="inputUitvoerder" name="inputUitvoerder" onkeyup="myFunction2()" placeholder="+Nieuwe Uitvoerder" type="text"> 
                      <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="#!">Personeel</a></li>
                        <li><a href="#!">Overig</a></li>
                      </ul>
                    </div>
                    <small class="text-danger red-text" id="inputUitvoerderError"></small>
                  </div>
                  <div class="col s12 m1">
                    <div class="input-group-append" id="appending">
                      <button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" type="button"></button>
                      <div class="dropdown-menu" id="inputUitvoerderMenu">
                        <a class="dropdown-item" id="1000" onclick="inputUitvoerderMenu(this.id)">''</a>
                      </div>
                    </div>
                  </div>
                  <div class="form-group roww">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                      <select class="custom-select" id="nodeChoice">
                        <option selected value="1">
                          Mens
                        </option>
                        <option value="2">
                          Machine
                        </option>
                        <option value="3">
                          Computer
                        </option>
                      </select>
                    </div>
                  </div>
                  <!-- Tot hier. -->
                  <div class="col s12 m12" id="">
                    <label class="col-sm-2 col-form-label black-text" for="fifth-element-introduction">Tijdsduur</label>
                  </div>
                  <div class="col s12 m12" id="fifth-element-introduction">
                    <div class="col s12 m3">
                      <label class="col-form-label" for="daysInput">Dagen</label> <input class="form-control" oninput="myFunction3()" id="daysInput" max="365" min="0" name="daysInput" type="number" value="0"> <small class="text-danger" id="inputDaysError"></small>
                    </div>
                    <div class="col s12 m3">
                      <label class="col-form-label" for="hoursInput">Uren</label> <input class="form-control"  oninput="myFunction3()"  id="hoursInput" max="23" min="0" name="hoursInput" type="number" value="0"> <small class="text-danger" id="inputHoursError"></small>
                    </div>
                    <div class="col s12 m3">
                      <label class="col-form-label" for="minutesInput">Minuten</label> <input class="form-control"  oninput="myFunction3()"  id="minutesInput" max="59" min="0" name="minutesInput" type="number" value="0"> <small class="text-danger" id="inputMinutesError"></small>
                    </div>
                    <div class="col s12 m3">
                      <label class="col-form-label" for="secondsInput">Seconden</label> <input class="form-control"  oninput="myFunction3()"  id="secondsInput" max="59" min="0" name="secondsInput" type="number" value="0"> <small class="text-danger" id="inputSecondsError"></small>
                    </div>
                    <small class="text-danger red-text" id="inputTijdError"></small>
                  </div>
                  <div class="col s12 m12" id="fourth-element-introduction">
                    <label class="col-sm-2 col-form-label black-text">Extra opties</label>
                    <div id="nodeApartInputDiv">
                      <label><input   id="nodeApart" name="nodeApart" type="checkbox"> <span class="tooltipped" data-position="right" data-tooltip="Werken de uitvoerders tegelijkertijd aan deze activiteit?">Taak kan door minder uitvoerders uitgevoerd worden.</span></label>
                    </div>
                    <div id="nodeKlantInputDiv">
                      <div class="">
                        <label><input class="" id="nodeKlant" name="nodeKlant" type="checkbox"> <span>{{Tekenen_Conditional_1}}</span></label>
                      </div>
                    </div>
                    <div id="nodeWachtInputDiv">
                      <div class="form-check">
                        <label><input class="form-check-input tooltipped" data-position="bottom" data-tooltip="Moet de uitvoerder(s) wachten terwijl de klant deze stap uitvoert?" id="nodeWacht" name="nodeWacht" type="checkbox"> <span> Uitvoerder moet wachten</span></label>
                      </div>
                    </div>
                    <div id="nodeBeschikbaarInputDiv">
                      <div class="form-check">
                        <label><input class="form-check-input tooltipped" data-position="bottom" data-tooltip="Kunnen de uitvoerder(s) andere werkzaamheden doen terwijl de klant deze activiteit uitvoert?" id="nodeBeschikbaar" name="nodeBeschikbaar" type="checkbox"> <span>Uitvoerder blijft beschikbaar</span></label>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="btn blue" id="sixth-element-introduction" onclick="addnode()" type="button"><i class="material-icons left white-text">add_circle_outline</i>Activiteit aanmaken</button>
                <div class="formodal2" id="myfuncform">
                  <div class="modal fade" id="Modal2" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <button class="btn btn-default"   data-dismiss="modal" type="button" onclick="verbindingenfunctie()">Ik heb al mijn activiteiten aangemaakt</button>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div  class="modal fade relatie_modal" id="modalAddEdges" role="dialog" tabindex="-1">
                        <div class="modal-dialog" role="document" >
                          <div class="modal-content" id="verbinding3">
                            <div class="modal-header text-center"></div>
                            <p> In dit scherm geeft u de 'stroom' van uw activiteiten aan. Maak relaties aan zodat duidelijk wordt in welke volgorde uw activiteiten uitgevoerd worden.
                            <p>
                            <h5 class="modal-title w-100 font-weight-bold">Relaties aanmaken</h5>
                            <div class="modal-body mx-3">
                              <div class="md-form mb-5">
                                <i class="fas fa-envelope prefix grey-text"></i> <label class="black-text" for="nodefrom">Activiteit</label> 
                                <select class="custom-select filternodefrom" id="nodefrom">
                                  <option selected value="0">
                                    Kies activiteit...
                                  </option>
                                </select>
                              </div>
                              <div class="md-form mb-5">
                                <i class="fas fa-lock prefix grey-text"></i> <label class="black-text" for="nodeto">Is benodigd voor</label> 
                                <select class="custom-select filternodeto" id="nodeto">
                                  <option selected value="0">
                                    Kies activiteit...
                                  </option>
                                </select>
                              </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <button class="btn blue btn-success" onclick="addedge()" type="button">Relatie aanmaken</button>
                            </div>
                            <div class="modal-header text-center">
                              <h5 class="modal-title w-100 font-weight-bold">Relaties verwijderen</h5>
                            </div>
                            <div class="modal-body mx-3">
                              <div class="md-form mb-5">
                                <i class="fas fa-envelope prefix grey-text"></i> <label class="black-text" for="noderemovefrom">Verwijderen verbinding van activiteit</label> 
                                <select class="custom-select" id="noderemovefrom">
                                  <option selected value="0">
                                    Kies...
                                  </option>
                                </select>
                              </div>
                              <div class="md-form mb-5">
                                <i class="fas fa-lock prefix grey-text"></i> <label class="black-text" for="noderemoveto">Naar activiteit</label> 
                                <select class="custom-select" id="noderemoveto">
                                  <option selected value="0">
                                    Kies...
                                  </option>
                                </select>
                              </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <button class="btn red" onclick="removeedge()" type="button">Verbinding verwijderen</button>
                            </div>
                          </div>
                          <div class="modal-footer center-align">
                            <a id="buttonadd" class="btn green center-align" data-target="modalChoices" data-toggle="modal"  onclick= "edgeconfirm()"><i class="material-icons left white-text">check</i>Alle relaties zijn correct</a>
                            <br>
                            <small class="text-danger red-text" id="edgeError"></small>
                          </div>
                        </div>
                      </div>
                      <br>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col s12 m12 center-align">
                  <a class="btn green modal-trigger center-align" data-target="modalAddEdges" id="volledigklaar" data-toggle="modal" href=""><i class="material-icons left white-text">check</i>Alle activiteiten zijn opgegeven</a>
                </div>
                <div class="formodal3" id="myfuncform">
                  <div class="modal fade" id="Modal3" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <button class="btn btn-default"  data-dismiss="modal" type="button">Ik heb alle relaties aangegeven</button>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div aria-hidden="true" aria-labelledby="modalRemoveNodesLabel" class="modal fade" id="modalEditNodes" role="dialog" tabindex="-1">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header text-center">
                              <h5 class="modal-title w-100 font-weight-bold">Activiteiten bewerken</h5>
                            </div>
                            <div class="modal-body mx-3">
                              <div class="md-form mb-5">
                                <i class="fas fa-envelope prefix grey-text"></i> <label class="black-text" for="nodeedit">Kies aan te passen activiteit</label> 
                                <select class="custom-select" id="nodeedit" onchange="on_change()">
                                  <option selected value="0">
                                    Kies aan te passen activiteit
                                  </option>
                                </select>
                              </div>
                              <hr>
                              <div class="md-form mb-5">
                                <i class="fas fa-envelope prefix grey-text"></i> <label class=" black-text" for="editNode">Nieuwe naam van activiteit</label> <input class="form-control" id="editNode" name="editNode" placeholder="Naam van de activiteit" type="text"> <small class="text-danger" id="editNodeError"></small>
                              </div>
                              <div class="md-form mb-5">
                                <i class="fas fa-envelope prefix grey-text"></i> <label class=" black-text" for="editUitvoerder">Uitvoerder</label>
                                <div>
                                  <div class="chips chips-initialos2">
                                    <input class="" id="editUitvoerder" name="editUitvoerder" placeholder="+Nieuwe Uitvoerder" type="text"> 
                                  </div>
                                  <div class="input-group-append">
                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" type="button"></button>
                                    <div class="dropdown-menu" id="editUitvoerderMenu">
                                      <a class="dropdown-item" id="1000" onclick="editUitvoerderMenu(this.id)">''</a>
                                    </div>
                                  </div>
                                </div>
                                <small class="text-danger" id="editUitvoerderError"></small>
                              </div>
                              <br>
                              <div class="md-form mb-5">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <div class="row">
                                  <div id="nodeApartInputDivEdit">
                                    <label><input class="" id="nodeApartEdit" name="nodeApartEdit" type="checkbox"> <span>Uitvoerders werken niet samen</span></label>
                                  </div>
                                  <div id="nodeKlantInputDivEdit">
                                    <div class="">
                                      <label><input class="" id="nodeKlantEdit" name="nodeKlantEdit" type="checkbox"> <span>{{Tekenen_Conditional_1}}</span></label>
                                    </div>
                                  </div>
                                  <div id="nodeWachtInputDivEdit">
                                    <div class="">
                                      <label><input class="form-check-input" id="nodeWachtEdit" name="nodeWachtEdit" type="checkbox"> <span>Uitvoerder moet wachten</span></label>
                                    </div>
                                  </div>
                                  <div id="nodeBeschikbaarInputDivEdit">
                                    <div class="">
                                      <label><input class="form-check-input" id="nodeBeschikbaarEdit" name="nodeBeschikbaarEdit" type="checkbox"> <span>Uitvoerder blijft beschikbaar</span></label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="md-form mb-5">
                                <i class="fas fa-envelope prefix grey-text"></i> 
                                <select class="custom-select" id="nodeChoiceEdit">
                                  <option selected value="1">
                                    Fans
                                  </option>
                                  <option value="2">
                                    Machine
                                  </option>
                                  <option value="3">
                                    Computer
                                  </option>
                                </select>
                              </div>
                              <div class="row">
                                <div class="col s12 m3">
                                  <label class="col-form-label" for="daysInputEdit">Dagen</label> <input class="form-control" id="daysInputEdit" max="365" min="0" name="daysInputEdit" type="number" value="0"> <small class="text-danger" id="inputDaysError"></small>
                                </div>
                                <div class="col s12 m3">
                                  <label class="col-form-label" for="hoursInputEdit">Uren</label> <input class="form-control" id="hoursInputEdit" max="23" min="0" name="hoursInputEdit" type="number" value="0"> <small class="text-danger" id="inputHoursError"></small>
                                </div>
                                <div class="col s12 m3">
                                  <label class="col-form-label" for="minutesInputEdit">Minuten</label> <input class="form-control" id="minutesInputEdit" max="59" min="0" name="minutesInputEdit" type="number" value="0"> <small class="text-danger" id="inputMinutesError"></small>
                                </div>
                                <div class="col s12 m3">
                                  <label class="col-form-label" for="secondsInputEdit">Seconden</label> <input class="form-control" id="secondsInputEdit" max="59" min="0" name="secondsInputEdit" type="number" value="0"> <small class="text-danger" id="inputSecondsError"></small>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <button class="btn blue" onclick="editnodes();testen();" type="button">Activiteit aanpassen</button>
                            </div>
                            <button aria-label="Close" class="btn green modal-close modal-trigger" data-target="modalChoices" data-dismiss="modal" type="button"><span aria-hidden="true"><i class="material-icons left">check</i>Activiteiten succesvol bewerkt</span></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div aria-hidden="true" aria-labelledby="modalRemoveNodesLabel" class="modal fade" id="modalRemoveNodes" role="dialog" tabindex="-1">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header text-center">
                              <h5 class="modal-title w-100 font-weight-bold">Activiteiten verwijderen</h5>
                              <button aria-label="Close" class="btn-floating close red modal-close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body mx-3">
                              <div class="md-form mb-5">
                                <i class="fas fa-envelope prefix grey-text"></i> <label class="black-text" for="noderemove">Te verwijderen activiteit</label> 
                                <select class="custom-select" id="noderemove">
                                  <option selected value="0">
                                    Maak uw keuze...
                                  </option>
                                </select>
                              </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <button class="btn red" onclick="removenode()" type="button">activiteit verwijderen</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div aria-hidden="true" aria-labelledby="modalRemoveEdgesLabel" class="modal fade" id="modalRemoveEdges" role="dialog" tabindex="-1">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header text-center">
                              <h5 class="modal-title w-100 font-weight-bold">Relaties verwijderen</h5>
                              <button aria-label="Close" class="btn-floating close red modal-close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body mx-3">
                              <div class="md-form mb-5">
                                <i class="fas fa-envelope prefix grey-text"></i> <label class="black-text" for="noderemovefrom">Verwijderen verbinding van activiteit</label> 
                                <select class="custom-select" id="noderemovefrom">
                                  <option selected value="0">
                                    Kies...
                                  </option>
                                </select>
                              </div>
                              <div class="md-form mb-5">
                                <i class="fas fa-lock prefix grey-text"></i> <label class="black-text" for="noderemoveto">Naar activiteit</label> 
                                <select class="custom-select" id="noderemoveto">
                                  <option selected value="0">
                                    Kies...
                                  </option>
                                </select>
                              </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <button class="btn red" onclick="removeedge()" type="button">Verbinding verwijderen</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="formodal4" id="myfuncform">
                  <div class="modal fade" id="Modal3" role="dialog">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <button class="btn btn-default"  data-dismiss="modal" type="button">Ik heb alle relaties aangegeven</button>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div aria-hidden="true" aria-labelledby="modalRemoveNodesLabel" class="modal fade" id="modalChoices" role="dialog" tabindex="-1">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header text-center">
                              <h5 class="modal-title w-100 font-weight-bold">Controlescherm</h5>
                              <p>U bent klaar met het aanmaken van uw proces. Hier kunt indien nodig enkele wijzigingen doorvoeren. Bent u klaar? Klik dan op onderstaande knop 'Proces is compleet'</p>
                            </div>
                            <div class="modal-body mx-3 vertical-align">
                              <div class="col s12 m4 center-align">
                                <div class="card white card-panel hoverable modal-trigger modal-close" data-target="modalEditNodes" id="verbinding2" data-toggle="modal" >
                                  <i class="large material-icons">edit</i>
                                  <p>Activiteiten bewerken</p>
                                </div>
                              </div>
                              <div class="col s12 m4 center-align">
                                <div class="card white card-panel hoverable modal-trigger modal-close" data-target="modalAddEdges" data-dismiss="modal" id="verbinding2" data-toggle="modal" >
                                  <i class="large material-icons">timeline</i>
                                  <p>Relaties bewerken</p>
                                </div>
                              </div>
                              <div class="col s12 m4 center-align">
                                <div class="card white card-panel hoverable modal-trigger modal-close" data-dismiss="modal" id="verbinding2" data-toggle="modal">
                                  <i class="large material-icons">add</i>
                                  <p>Activiteiten toevoegen</p>
                                </div>
                              </div>
                            </div>
                            <div class='divider'></div>
                            <div class="center-align">
                              <button class="btn green" onclick="complete()">Proces is compleet</button>
                              <p>Dit sluit deze stap af en vervolgt het consult</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <div class='row'>
                <h6 class="center proces-preview" >Voorbeeld van uw proces</h6>
                <p class="center proces-preview">U kunt uw activiteiten hier verslepen om het overzicht te behouden.</p>
              </div>
              <div class='row' id="seventh-element-introduction" style='height:80vh'>
                <div id="mynetwork"></div>
              </div>
            </div>
          </div>
        
          <div>
            <pre id="jsondata"></pre>
          </div>
        
          <script type="text/javascript">
            var styleInput = [];
            var normalInput = [];
            var uitvoerderInput = [];
            
            var styleEdit = [];
            var normalEdit = [];
            var uitvoerderEdit = [];
            
            function on_change() {
            
            var x = document.getElementById("nodeedit");
            
            if (x != null && myData.nData.length != 0) {
            var i = x.selectedIndex;
            document.getElementById("editNode").value = myData.nData[i].label;
            
            
            var tijden =  myData.nData[i].time.split(':');
            var inzet = myData.nData[i].inzet.split(',');
            
            console.log(tijden);
            document.getElementById("daysInputEdit").value = tijden[0];
            document.getElementById("hoursInputEdit").value = tijden[1];
            document.getElementById("minutesInputEdit").value = tijden[2];
            document.getElementById("secondsInputEdit").value = tijden[3];
            
            
            if (myData.nData[i].klant == "true") {
            document.getElementById("nodeKlantEdit").checked = 1;
            } else {
            document.getElementById("nodeKlantEdit").checked = 0;
            }
            
            if (myData.nData[i].wacht == "true") {
            document.getElementById("nodeWachtEdit").checked = 1;
            } else {
            document.getElementById("nodeWachtEdit").checked = 0;
            }
            
            if (myData.nData[i].beschikbaar == "true") {
            document.getElementById("nodeBeschikbaarEdit").checked = 1;
            } else {
            document.getElementById("nodeBeschikbaarEdit").checked = 0;
            }
            
            if (myData.nData[i].apart == "true") {
            document.getElementById("nodeApartEdit").checked = 1;
            } else {
            document.getElementById("nodeApartEdit").checked = 0;
            }
            
            if (myData.nData[i].choice == "Mens") {
            document.getElementById("nodeChoiceEdit").value = 1;
            } else if (myData.nData[i].choice == "Machine") {
            document.getElementById("nodeChoiceEdit").value = 2;
            } else {
            document.getElementById("nodeChoiceEdit").value = 3;
            }
            
            var text  = myData.nData[i].uitvoerder;
            var dates3 = [];
            dates3 = text.split('\n,');
            var tags3 = [];
            
            for(i=0; i < dates3.length; i++) {
            tags3.push({tag: dates3[i]});
            };
            console.log(dates3);
            
            jq('.chips-initialos2').chips({
            data: tags3
            });
            
            for (i = 0; i < dates3.length; ++i) {
            document.getElementById("modalEditNodes").getElementsByClassName('chips-num')[i].value = inzet[i];
            }
            }
            
            }
            
            
            function inputUitvoerderMenu(nID) {
            for (i = 0; i < myData.nData.length; ++i) {
            if (myData.nData[i].id == nID) {
            var x = document.getElementsByClassName("chip");
            var x = document.getElementById("inputUitvoerder");
            var y = getAll();
            uitvoerderInput = [];
            uitvoerderInput = y.split('\n,');
            if (uitvoerderInput[0] == '') {
            uitvoerderInput.pop();
            }
            
            var sIndex = styleInput.indexOf(nID);
            if (sIndex == -1) {
            styleInput.push(nID);
            var nIndex = normalInput.indexOf(nID);
            if (nIndex != -1) {
            normalInput.splice(nIndex, 1);
            }
            } else {
            var z = myData.nData[i].uitvoerder;
            
            normalInput.push(nID);
            styleInput.splice(sIndex, 1);
            uitvoerderInput.splice(uitvoerderInput.indexOf(z), 1);
            }
            
            for (j = 0; j < styleInput.length; ++j) {
            var z = styleInput[j] - 1;
            if (uitvoerderInput.indexOf(myData.nData[z].uitvoerder) == -1) {
            uitvoerderInput.push(myData.nData[z].uitvoerder);
            }
            }
            
            x.value = '';
            for (j = 0; j < uitvoerderInput.length; ++j) {
            x.value += uitvoerderInput[j];
            if (j != (uitvoerderInput.length - 1)) {
            x.value += ', ';
            }
            }
            for (j = 0; j < styleInput.length; ++j) {
            document.getElementById(styleInput[j]).style.backgroundColor = 'yellow';
            }
            for (j = 0; j < normalInput.length; ++j) {
            document.getElementById(normalInput[j]).style.backgroundColor = '';
            }
            break;
            }
            }
            }
            
            function editUitvoerderMenu(nID) {
            nID = nID % 1000;
            for (i = 0; i < myData.nData.length; ++i) {
            if (myData.nData[i].id == nID) {
            var x = document.getElementById("editUitvoerder");
            var y = getAll();
            var y = y.replaceAll("\n", "");
            uitvoerderInput = [];
            uitvoerderInput = y.split(',');
            if (uitvoerderEdit[0] == '') {
            uitvoerderEdit.pop();
            }
            
            var sIndex = styleEdit.indexOf(nID);
            if (sIndex == -1) {
            styleEdit.push(nID);
            var nIndex = normalEdit.indexOf(nID);
            if (nIndex != -1) {
            normalEdit.splice(nIndex, 1);
            }
            } else {
            var z = myData.nData[i].uitvoerder;
            
            normalEdit.push(nID);
            styleEdit.splice(sIndex, 1);
            uitvoerderEdit.splice(uitvoerderEdit.indexOf(z), 1);
            }
            
            for (j = 0; j < styleEdit.length; ++j) {
            var z = styleEdit[j] - 1;
            if (uitvoerderEdit.indexOf(myData.nData[z].uitvoerder) == -1) {
            uitvoerderEdit.push(myData.nData[z].uitvoerder);
            }
            }
            
            x.value = '';
            for (j = 0; j < uitvoerderEdit.length; ++j) {
            x.value += uitvoerderEdit[j];
            if (j != (uitvoerderEdit.length - 1)) {
            x.value += ', ';
            }
            }
            for (j = 0; j < styleEdit.length; ++j) {
            var z = styleEdit[j] + 1000;
            document.getElementById(z).style.backgroundColor = 'yellow';
            }
            for (j = 0; j < normalEdit.length; ++j) {
            var z = normalEdit[j] + 1000;
            document.getElementById(z).style.backgroundColor = '';
            }
            break;
            }
            }
            }
            
            function addnode() {
            
            if (document.querySelector('.button-appear_4') !== null) {
            document.getElementsByClassName("button-appear_4")[0].style.display = 'inline';
            }
            
            
            
            var x = document.getElementById("inputNode").value;
            var x1 = getAll();
            var x111 = document.getElementById("inputUitvoerder").value;
            var x2 = document.getElementById("nodeWacht").checked;
            var x3 = document.getElementById("nodeBeschikbaar").checked;
            var x4 = document.getElementById("nodeChoice");
            var x5 = x4.options[x4.selectedIndex].text;
            
            var x6 = document.getElementById("daysInput").value;
            var x7 = document.getElementById("hoursInput").value;
            var x8 = document.getElementById("minutesInput").value;
            var x9 = document.getElementById("secondsInput").value;
            var x0 = x6 + ':' + x7 + ':' + x8 + ':' + x9;
            var x10 = document.getElementById("nodeKlant").checked;
            var x11 = document.getElementById("nodeApart").checked;
            var x100 = document.getElementById("inputUitvoerder").value;
            var x101 = getAllNum();
            
            document.getElementById("inputNodeError").innerHTML = "";
            document.getElementById("inputUitvoerderError").innerHTML = "";
            document.getElementById("inputDaysError").innerHTML = "";
            document.getElementById("inputHoursError").innerHTML = "";
            document.getElementById("inputMinutesError").innerHTML = "";
            document.getElementById("inputSecondsError").innerHTML = "";
            document.getElementById("inputTijdError").innerHTML = "";
            
            if (x == '') {
            document.getElementById("inputNodeError").innerHTML = "Deze activiteit moet een naam krijgen";
            document.getElementById("inputUitvoerderError").innerHTML = "";
            return;
            
            } else if (x1 == '' & x111 == '') {
            document.getElementById("inputUitvoerderError").innerHTML = "Geef uitvoerder(s) op. Vermeld indien relevant ook 'Klant' als uitvoerder.";
            document.getElementById("inputNodeError").innerHTML = "";
            return; 
            } else if (x1 == '') {
            document.getElementById("inputUitvoerderError").innerHTML = "Bevestig iedere individuele uitvoerder met enter.";
            document.getElementById("inputNodeError").innerHTML = "";
            return;
            } else if (x6 == '' || (parseInt(x6) < '0' || parseInt(x6) > '365')) {
            document.getElementById("inputDaysError").innerHTML = "Vul een waarde van 0 tot en met 365 in";
            return;
            } else if (x7 == '' || (parseInt(x7) < '0' || parseInt(x7) > '23')) {
            document.getElementById("inputHoursError").innerHTML = "Vul een waarde van 0 tot en met 23 in";
            return;
            } else if (x8 == '' || (parseInt(x8) < '0' || parseInt(x8) > '59')) {
            document.getElementById("inputMinutesError").innerHTML = "Vul een waarde van 0 tot en met 59 in";
            return;
            } else if (x9 == '' || (parseInt(x9) < '0' || parseInt(x9) > '59')) {
            document.getElementById("inputSecondsError").innerHTML = "Vul een waarde van 0 tot en met 59 in";
            return;
            } else if(x6 == '0' && x7 == '0' && x8 == '0' && x9 =='0') {
            document.getElementById("inputTijdError").innerHTML = "Vul minimaal een seconde in!";
            return;
            } else if(x100 != '') {
            document.getElementById("inputUitvoerderError").innerHTML = "Bevestig uw uitvoerder met enter.";
            return;
            } else{
            for (i = 0; i < x101.length; ++i) {
            
            if (x101[i] == 0) {
            document.getElementById("inputUitvoerderError").innerHTML = "Kan geen nul bevatten!";
            return;
            }
            }
            
            for (i = 0; i < myData.nData.length; ++i) {
            if (myData.nData[i].label == x) {
            document.getElementById("inputNodeError").innerHTML = "Er bestaat al een activiteit met deze naam";
            return;
            }
            }
            jojo();
            }
            
            
            
            myData.nData.push({
            "id": nodeID,
            "label": x,
            "uitvoerder": x1,
            "wacht": String(x2),
            "beschikbaar": String(x3),
            "choice": String(x5),
            "time": String(x0),
            "klant": String(x10),
            "apart": String(x11),
            "inzet": String(x101)
            });
            nodes.update(myData.nData);
            nodeID += 1;		
            
            reset();
            
            
            
            }
            
            function edgeconfirm() {
            
            var arrid = [];
            var arrtotal = [];		   
            for (i = 0; i < myData.nData.length; ++i) {
            arrid.push(myData.nData[i].id)
            }
            
            for (i = 0; i < myData.eData.length; ++i) {   
            arrtotal.push(myData.eData[i].to)
            arrtotal.push(myData.eData[i].from)
            }
            
            var ids =  arrid
            var totaal = arrtotal
            
            let difference = arrid.filter(x => !arrtotal.includes(x));
            
            if(difference != ""){
            document.getElementById("edgeError").innerHTML = "Er zijn stappen zonder relatie";
            var element = document.getElementById("buttonadd");
            element.classList.remove("modal-trigger");
            element.classList.remove("modal-close");
            return;
            }else{
            document.getElementById("edgeError").innerHTML = "";
            var element = document.getElementById("buttonadd");
            element.classList.add("modal-trigger");
            element.classList.add("modal-close");
            }
            }
            
            function addedge() {
            var x = document.getElementById("nodefrom");
            var y = document.getElementById("nodeto");
            var x1 = x.options[x.selectedIndex].text;
            var y1 = y.options[y.selectedIndex].text;
            
            myData.eData.push({
            "id": edgeID,
            "from": parseInt(x.value),
            "to": parseInt(y.value),
            "fromName": String(x1),
            "toName": String(y1),
            "arrows": "to",
            "physics": false
            });
            edges.update(myData.eData);
            
            edgeID += 1;
            
            reset();
            }
            
            function removeedge() {
            var x = document.getElementById("noderemovefrom");
            var y = document.getElementById("noderemoveto");
            
            for (i = 0; i < myData.eData.length; ++i) {
            if (myData.eData[i].from == parseInt(x.value) && myData.eData[i].to == parseInt(y.value)) {
            edges.remove(myData.eData[i].id);
            myData.eData.splice(i, 1);
            }
            }
            
            reset();
            }
            
            function editnodes() {
            var x = document.getElementById("nodeedit");
            
            for (i = 0; i < myData.nData.length; ++i) {
            if (myData.nData[i].id == parseInt(x.value)) {
            var y = document.getElementById("editNode").value;
            var y1 = document.getElementById("editUitvoerder").value;
            var y1 = getAll2();
            var y2 = document.getElementById("nodeWachtEdit").checked;
            var y3 = document.getElementById("nodeBeschikbaarEdit").checked;
            var y4 = document.getElementById("nodeChoiceEdit");
            var y5 = y4.options[y4.selectedIndex].text;
            var y6 = document.getElementById("nodeKlantEdit").checked;
            var y7 = document.getElementById("nodeApartEdit").checked;
            var y8 = document.getElementById("daysInputEdit").value;
            var y9 = document.getElementById("hoursInputEdit").value;
            var y10 = document.getElementById("minutesInputEdit").value;
            var y11 = document.getElementById("secondsInputEdit").value;
            var y12 = y8 + ':' + y9 + ':' + y10 + ':' + y11;
            var y101 = getAllNum2();
            
            if (y == '') {
            document.getElementById("editNodeError").innerHTML = "Node name cannot be empty!";
            document.getElementById("editUitvoerderError").innerHTML = "";
            return;
            } else if (y1 == '') {
            document.getElementById("editUitvoerderError").innerHTML = "Uitvoerder cannot be empty!";
            document.getElementById("editNodeError").innerHTML = "";
            return;
            } else {
            document.getElementById("editNodeError").innerHTML = "";
            document.getElementById("editUitvoerderError").innerHTML = "";
            }
            
            
            myData.nData[i].label = y;
            myData.nData[i].uitvoerder = String(y1);
            myData.nData[i].wacht = String(y2);
            myData.nData[i].beschikbaar = String(y3);
            myData.nData[i].choice = String(y5);
            myData.nData[i].klant = String(y6);
            myData.nData[i].apart = String(y7);
            myData.nData[i].time = String(y12);
            myData.nData[i].inzet = String(y101);
            
            nodes.update(myData.nData[i]);
            
            alert("Activiteit succesvol aangepast!");
            
            break;
            }
            }
            
            reset();
            }
            
            function removenode() {
            var x = document.getElementById("noderemove");
            for (i = 0; i < myData.eData.length; ++i) {
            if (myData.eData[i].from == parseInt(x.value) || myData.eData[i].to == parseInt(x.value)) {
            edges.remove(myData.eData[i].id);
            myData.eData.splice(i, 1);
            }
            }
            
            for (i = 0; i < myData.nData.length; ++i) {
            if (myData.nData[i].id == parseInt(x.value)) {
            nodes.remove(myData.nData[i].id);
            myData.nData.splice(i, 1);
            break;
            }
            }
            
            reset();
            }
            
            function reset() {
            document.getElementById("inputNode").value = "";
            document.getElementById("inputUitvoerder").value = "";
            document.getElementsByClassName("input-field").value = "";
            
            document.getElementById("nodeWacht").checked = 0;
            document.getElementById("nodeBeschikbaar").checked = 0;
            document.getElementById("nodeKlant").checked = 0;
            document.getElementById("nodeApart").checked = 0;
            document.getElementById("editNode").value = "";
            document.getElementById("editUitvoerder").value = "";
            document.getElementById("nodeWachtEdit").checked = 0;
            document.getElementById("nodeBeschikbaarEdit").checked = 0;
            document.getElementById("daysInput").value = 0;
            document.getElementById("hoursInput").value = 0;
            document.getElementById("secondsInput").value = 0;
            document.getElementById("minutesInput").value = 0;
            
            
            
            document.getElementById("inputUitvoerderMenu").innerHTML = "";
            document.getElementById("editUitvoerderMenu").innerHTML = "";
            
            
            
            deleteData("noderemovefrom");
            deleteData("noderemoveto");
            deleteData("nodeedit");
            deleteData("noderemove");
            
            
            for (i = 0; i < myData.nData.length; ++i) {
            updateData("nodefrom", myData.nData[i].label, myData.nData[i].id);
            updateData("nodeto", myData.nData[i].label, myData.nData[i].id);
            updateData("noderemovefrom", myData.nData[i].label, myData.nData[i].id);
            updateData("noderemoveto", myData.nData[i].label, myData.nData[i].id);
            updateData("nodeedit", myData.nData[i].label, myData.nData[i].id);
            updateData("noderemove", myData.nData[i].label, myData.nData[i].id);
            }
            
            
            var seen = {};
            jQuery('.filternodefrom').children().each(function() {
            var txt = jQuery(this).attr('value');
            if (seen[txt]) {
            jQuery(this).remove();
            } else {
            seen[txt] = true;
            }
            });
            var seen = {};
            jQuery('.filternodeto').children().each(function() {
            var txt = jQuery(this).attr('value');
            if (seen[txt]) {
            jQuery(this).remove();
            } else {
            seen[txt] = true;
            }
            });
            
            
            
            updateButtons();
            on_change();
            
            document.getElementById("jsondata").innerHTML = JSON.stringify(myData, undefined, 2);
            }
            
            function deleteData(eID) {
            var element = document.getElementById(eID);
            var len = element.options.length;
            for (i = len - 1; i >= 0; --i) {
            element.options[i] = null;
            }
            }
            
            function updateData(eID, label, id) {
            var element = document.getElementById(eID);
            var elementOpt = document.createElement("option");
            elementOpt.textContent = label;
            elementOpt.value = String(id);
            element.appendChild(elementOpt);
            }
            
            function avoidDuplicate() {
            var chkData = {};
            var data = myData.nData;
            data = data.filter(function(obj) {
            if (obj.uitvoerder in chkData) {
            return false;
            } else {
            chkData[obj.uitvoerder] = true;
            return true;
            }
            });
            return data;
            }
            
            function updateButtons() {
            var data = avoidDuplicate();
            for (i = 0; i < data.length; ++i) {
            var editID = data[i].id + 1000;
            var strInputHTML = "<a id=\"" + data[i].id + "\" class=\"dropdown-item\" onclick=\"inputUitvoerderMenu(this.id)\">" + data[i].uitvoerder + "<\/a>";
            var strEditHTML = "<a id=\"" + editID + "\" class=\"dropdown-item\" onclick=\"editUitvoerderMenu(this.id)\">" + data[i].uitvoerder + "<\/a>";
            document.getElementById("inputUitvoerderMenu").innerHTML += strInputHTML;
            document.getElementById("editUitvoerderMenu").innerHTML += strEditHTML;
            }
            }
            
            document.getElementById("jsondata").innerHTML = JSON.stringify(myData, undefined, 2);
            
            var container = document.getElementById('mynetwork');
            
            nodes.update(myData.nData);
            edges.update(myData.eData);
            
            var data = {
            nodes: nodes,
            edges: edges
            };
            var options = {"physics": {
            "enabled": true,
            "barnesHut": {
            "gravitationalConstant": -0.01,
            "centralGravity": 0,
            "springLength": 8,
            "avoidOverlap": 1
            },
            "maxVelocity": 2,
            "minVelocity": 1
            },
            "edges": {
            "physics": false,
            "smooth": false},
            "nodes": {color:'#546a7b',"font": {color: '#ffffff', size: 10},shape: 'box', size: '50'},
            "interaction":{"zoomView": false},
            
            };
            var network = new vis.Network(container, data, options);
            
            on_change();
            
            
            network.fit();
            network.moveTo({scale: 2});
            
          </script>
          <script>
            var jq = $.noConflict();
            
            jq(document).ready(function(){
            jq("#myModal").modal('show');
            jq("#Modal2").modal("show");
            jq(".formodal2").addClass("after_modal_appended");
            jq('.modal-backdrop').appendTo('.formodal2');
            jq("#Modal3").modal("show");
            jq(".formodal3").addClass("after_modal_appended");
            jq('.modal-backdrop').appendTo('.formodal3');});
            
            
            jq(function () {
            jq('[data-toggle="popover"]').popover()
            })      
            
            
            jq('#nodeWachtInputDiv').hide();
            jq('#nodeBeschikbaarInputDiv').hide();
            jq('#nodeWachtInputDivEdit').hide();
            jq('#nodeBeschikbaarInputDivEdit').hide();
            
            
            jq('#{{Tekenen_Conditional_2}}').on('click', function() {
            if (jq('#nodeKlant').is(':checked')) {
            jq('#nodeWachtInputDiv').show();
            jq('#nodeWachtInputDiv #nodeWacht').prop('checked', false);
            jq('#nodeBeschikbaarInputDiv').show();
            jq('#nodeBeschikbaarInputDiv #nodeBeschikbaar').prop('checked', false);
            jq('#nodeWachtInputDivEdit').show();
            jq('#nodeBeschikbaarInputDivEdit').show();
            
            
            
            } else {
            jq('#nodeWachtInputDiv').hide();
            jq('#nodeWachtInputDiv #nodeWacht').prop('checked', false);
            jq('#nodeBeschikbaarInputDiv').hide();
            jq('#nodeBeschikbaarInputDiv #nodeBeschikbaar').prop('checked', false);
            jq('#nodeWachtInputDivEdit').hide();
            jq('#nodeBeschikbaarInputDivEdit').hide();
            
            }
            
            });
            
          </script>
          <script>
            function starttour(){
            
            const tour = new Shepherd.Tour({useModalOverlay: true})
            
            tour.on("complete", onTourEnd);
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Welkom! <br> Om uw proces te analyseren moeten we eerst weten uit welke activiteiten deze bestaat.<br> Aan u de taak om alle activiteiten op te geven. We zullen de eerste gezamenlijk uitvoeren.<img src="https://scriptedconsultancy.com/images/tutorial.gif" width="100%">',
            attachTo: {
            element: '#first-element-introduction',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Starten',
            action: tour.next,
            classes: 'btn-large white-text',
            }
            ]
            }
            );
            
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Geef de naam van een activiteit voor {{Product_1_Naam}} en typ deze op bovenstaande regel.<br> Begin bij voorkeur met de laatste activiteit. Geef dus de naam van de activiteit die uw product klaar maakt voor de verkoop.<br><br> <img src="https://scriptedconsultancy.com/images/activiteitnaam.gif" width="100%">',
            attachTo: {
            element: '#second-element-introduction',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear white-text',
            }
            ]
            }
            );
            
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Geef nu de namen van alle machines, mensen en middelen die deze activiteit uitvoeren. Scheid elke ingave met de enter knop. <br><br> <img src="https://scriptedconsultancy.com/images/uitvoerders.gif" width="100%">',
            attachTo: {
            element: '#third-element-introduction',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_2 white-text',
            }
            ]
            }
            );
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Geef nu de namen van alle machines, mensen en middelen die deze activiteit uitvoeren. Scheid elke ingave met de enter knop. <br><br> <img src="https://scriptedconsultancy.com/images/uitvoerders.gif" width="100%">',
            attachTo: {
            element: '.chips-num',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_200 white-text',
            }
            ]
            }
            );
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Geef op hoeveel tijd deze activiteit in beslag neemt.',
            attachTo: {
            element: '#fifth-element-introduction',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_3 white-text',
            }
            ]
            }
            );
            
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Vink vervolgens alle opties aan die voor deze activiteit van toepassing zijn.',
            attachTo: {
            element: '#fourth-element-introduction',
            on: 'top'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large white-text',
            }
            ]
            }
            );
            
            
            
            
            
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Klik op deze knop om de activiteit aan te maken',
            attachTo: {
            element: '#sixth-element-introduction',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_4 white-text',
            }
            ]
            }
            );
            
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Uw aangemaakte activiteiten verschijnen hier. U kunt uw activiteiten hier verslepen om het overzicht te behouden.',
            attachTo: {
            element: '#mynetwork',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_5 white-text',
            }
            ]
            }
            );
            
            
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Maak vervolgens van elke activiteit die nodig is om {{Product_1_Naam}} te maken een activiteit aan, op dezelfde wijze.',
            attachTo: {
            element: '#forminfo',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_6 white-text',
            }
            ]
            }
            );
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Als u alle activiteiten hebt opgegeven klikt u hier om verder te gaan.',
            attachTo: {
            element: '#volledigklaar',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Klaar',
            action: tour.complete,
            classes: 'btn-large button-appear_7 white-text',
            }
            ]
            }
            );
            
            tour.start();
            
            function onTourEnd() {
            var element = document.getElementById("volledigklaar");
            element.classList.remove("disabled");
            }
            
            
            }
            
            
            function verbindingenfunctie() {
            const tour = new Shepherd.Tour({useModalOverlay: true})
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Dan gaan we beginnen aan stap 2, het maken van verbindingen tussen uw activiteiten. Zo kunt u aangeven hoe de werkstroom is tussen activiteiten.',
            attachTo: {
            element: '#verbinding1',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_8 white-text',
            }
            ]
            }
            );
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Klik op de knop "VOEG VERBINDINGEN TOE" om het menu te openen.',
            attachTo: {
            element: '#verbinding2',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_9 white-text',
            }
            ]
            }
            );
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'In dit scherm kunt u verbindingen aanmaken tussen activiteiten.',
            attachTo: {
            element: '#verbinding3',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_10 white-text',
            }
            ]
            }
            );
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Kies hier een activiteit uit,bijvoorbeeld de eerste activiteit in uw werkproces.',
            attachTo: {
            element: '#verbinding4',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_11 white-text',
            }
            ]
            }
            );
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Kies hier de activiteit die na de bovengenoemde activiteit uitgevoerd wordt.',
            attachTo: {
            element: '#verbinding5',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_12 white-text',
            }
            ]
            }
            );
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Klik op deze knop om de verbinding aan te maken.',
            attachTo: {
            element: '#verbinding6',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_13 white-text',
            }
            ]
            }
            );
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'U ziet hier rechts de verbinding tussen de stappen ontstaan.',
            attachTo: {
            element: '#verbinding7',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_14 white-text',
            }
            ]
            }
            );
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Maak vervolgens alle verbindingen aan, zodat elke activitiet in verbinding staat met een ander.',
            attachTo: {
            element: '#verbinding8',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_15 white-text',
            }
            ]
            }
            );
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Maak vervolgens van elke activiteit die nodig is om {{Product_1_Naam}} te maken een stap aan, op dezelfde wijze.',
            attachTo: {
            element: '#verbinding9',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Volgende',
            action: tour.next,
            classes: 'btn-large button-appear_16 white-text',
            }
            ]
            }
            );
            
            tour.addStep({
            id: 'example-stepppen',
            text: 'Sluit dit venster af wanneer u klaar bent.',
            attachTo: {
            element: '#verbinding10',
            on: 'bottom'
            },
            classes: 'example-step-extra-class',
            buttons: [
            {
            text: 'Ok??',
            action: tour.next,
            classes: 'btn-large button-appear_17 white-text',
            }
            ]
            }
            );
            
            
            tour.start();
            }
            
          </script>
          <script>
            function testen() {
            
            var pages = jq('.dropdown-item').map(function () {
            var page = new Object();
            page.name = jq(this).text();
            return page;
            }).get();
            
            var publish = {
            Pages: pages
            }
            
            var seenNames = {};
            
            array = array.filter(function(currentObject) {
            if (currentObject.name in seenNames) {
            return false;
            } else {
            seenNames[currentObject.name] = true;
            return true;
            }
            
            var json_pages_1 = JSON.stringify(publish);
            alert(json_pages_1)
            }
            
          </script>
          <script>
            window.myFunction = function() {
            var hasValue = document.getElementById("inputNode").value;
            if (!!hasValue) {
            document.getElementsByClassName("button-appear")[0].style.display = 'inline';
            } else {
            document.getElementsByClassName("button-appear")[0].style.display = 'none';
            };
            };
            
            window.myFunction2 = function() {
            var hasValue2 = document.getElementById("third-element-introduction").getElementsByClassName('chip'); 
            if (!!hasValue2[0]) {
            document.getElementsByClassName("button-appear_2")[0].style.display = 'inline';
            } else {
            document.getElementsByClassName("button-appear_2")[0].style.display = 'none';
            };
            };
            
            window.myFunction3 = function() {
            var days = document.getElementById("daysInput").value;
            var hours = document.getElementById("hoursInput").value;
            var minutes = document.getElementById("minutesInput").value;
            var seconds = document.getElementById("secondsInput").value;
            
            if (days != 0 || hours != 0 || minutes != 0|| seconds != 0) {
            document.getElementsByClassName("button-appear_3")[0].style.display = 'inline';
            
            } else {
            document.getElementsByClassName("button-appear_3")[0].style.display = 'none';
            };
            };
            
            
            function button4appear() {
            document.getElementsByClassName("button-appear_4")[0].style.display = 'inline';
            }
            
            function undisable(){
            var element = document.getElementById("volledigklaar");
            element.classList.remove("disabled");
            }
            
            
          </script>
          <script>
            function getAll() { 
            var chips = document.getElementById("third-element-introduction").getElementsByClassName('chip'); 
            var arr = []; 
            for (var i = 0; i < chips.length; i++) { 
            var cc = chips[i].innerText.replaceAll('close', '');
            arr.push(cc); 
            } ;
            return arr.toString(); }
            
            function getAll2() { 
            var chips = document.getElementById("modalEditNodes").getElementsByClassName('chip'); 
            var arr = []; 
            for (var i = 0; i < chips.length; i++) { 
            var cc = chips[i].innerText.replaceAll('close', '');
            arr.push(cc); 
            } ;
            return arr.toString(); }
            
            
            function getAllNum() { 
            var texts= jq("#third-element-introduction .chips-num").map(function() {
            return jq(this).val();}).get(); 
            return texts;}
            
            function getAllNum2() { 
            var texts= jq("#modalEditNodes .chips-num").map(function() {
            return jq(this).val();}).get(); 
            return texts;}
            
            function getDropdown() { 
            var chips = document.getElementsByClassName('dropdown-item'); 
            var arr = []; 
            for (var i = 0; i < chips.length; i++) { 
            var cc = chips[i].innerText.replaceAll('\n', '');
            arr.push(cc); 
            } ;
            
            var arr = arr.toString();
            var arr = arr.split(',');
            var uniqueItems = Array.from(new Set(arr))
            let obj = uniqueItems.reduce((acc, curr)=>{ acc[curr] = null; return acc},{})
            return obj; }
            
            function doStuff() {
            y = getDropdown();
            return y;
            }
            
            function jojo() {
            var elems = document.querySelectorAll('.chips');
            var instances = M.Chips.init(elems, {
            autocompleteOptions: {
            data: getDropdown() ,
            limit: Infinity,
            minLength: 1
            }
            });
            };
            
            function collection(){
            var elems = document.querySelectorAll('.chips');
            var instances = M.Chips.init(elems, {
            autocompleteOptions: {
            data: doStuff() ,
            limit: Infinity,
            minLength: 1
            }
            });
            }
          </script>
          
          <button onclick= "edgeconfirm()"></button>
          <script src="https://scriptedconsultancy.com/js/juiste.js"></script>
        </div>
      </main>
    </section>
    <form id="phpForm" method="post">
      <textarea hidden name="all_data" id="allData"></textarea>
    </form>
    <script src="script.js"></script>
</body>
</html>