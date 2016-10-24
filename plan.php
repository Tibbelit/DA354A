<?php
	include "_header.php";
?>
	<div class="row">
		<div class="col-lg-8 create-submenu">
			<h2>Planering</h2>
            <p>För enkelhetens skull är alla viktiga datum och tider sammanställda här. För att undvika motsägande information är salar inte angivna - se det <a href="http://schema.mah.se/setup/jsp/Schema.jsp?startDatum=idag&intervallTyp=m&intervallAntal=6&sprak=SV&sokMedAND=true&forklaringar=true&resurser=k.DA156A-20162-TS789-">officiella schemat</a>.</p>
            <p>Labbtillfällena är i grunden fria att disponera, men i tabellen nedan anges så långt man minst bör sträva efter att komma. (Det skadar aldrig att jobba senare delar!)</p>
            <p>Innehållet för varje tillfälle presenteras, eller kommer att presenteras, på sidorna för <a href="/lectures.php">föreläsningar</a>, <a href="/exercises.php">laborationer</a> och <a href="/assignments.php">inlämningsuppgifter</a>.</p>
            <h3>1. Tillfällen och deadline</h3>
            <table class="table" id="plan">
                <tr class="odd header">
                    <th>Vecka</th>
                    <th>Datum</th>
                    <th>Tid*</th>
                    <th>Vad</th>
                </tr>
                <tr class="lecture even">
                    <td rowspan="2">45</td>
                    <td>9/11</td>
                    <td>13-15</td>
                    <td>Kursintroduktion</td>
                </tr>
                <tr class="laboration even">
                    <td>11/11</td>
                    <td>08-10, 10-12</td>
                    <td>Introduktion till Python + laboration</td>
                </tr>

                <tr class="laboration odd">
                    <td rowspan="3">46</td>
                    <td>15/11</td>
                    <td>08-12</td>
                    <td>Laboration 1: Introduktion till Python</td>
                </tr>
                <tr class="lecture odd">
                    <td>16/11</td>
                    <td>13-15</td>
                    <td>Föreläsning - Funktioner</td>
                </tr>
                <tr class="laboration odd">
                    <td>18/11</td>
                    <td>09-12</td>
                    <td>Inför laboration + laboration</td>
                </tr>

                <tr class="laboration even">
                    <td rowspan="3">47</td>
                    <td>22/11</td>
                    <td>08-12</td>
                    <td>Laboration 2: Funktioner</td>
                </tr>
                <tr class="lecture even">
                    <td>23/11</td>
                    <td>13-15</td>
                    <td>Föreläsning - If-satser och loopar</td>
                </tr>
                <tr class="laboration even">
                    <td>24/11</td>
                    <td>09-10, 10-12</td>
                    <td>Inför laboration + laboration</td>
                </tr>

                <tr class="laboration odd">
                    <td rowspan="4">48</td>
                    <td>29/11</td>
                    <td>08-12</td>
                    <td>Laboration 3: If-satser och loopar</td>
                </tr>
                <tr class="lecture odd">
                    <td>30/11</td>
                    <td>13-15</td>
                    <td>Föreläsning - Listor och lexikon</td>
                </tr>
				<tr class="tenta assignment odd">
					<td colspan="2">30/11</td>
                    <td><em>Deadline: Inlämningsuppgift 1</em></td>
				</tr>
                <tr class="laboration odd">
                    <td>2/12</td>
                    <td>09-10, 10-12</td>
                    <td>Inför laboration + laboration</td>
                </tr>

                <tr class="laboration even">
                    <td rowspan="4">49</td>
                    <td>6/12</td>
                    <td>08-12</td>
                    <td>Laboration 4: Listor och lexikon</td>
                </tr>
                <tr class="lecture even">
                    <td>7/12</td>
                    <td>13-15</td>
                    <td>Föreläsning - Fil- och felhantering</td>
                </tr>
				<tr class="tenta assignment even">
					<td colspan="2">7/12</td>
                    <td><em>Deadline: Inlämningsuppgift 2</em></td>
				</tr>
				<tr class="laboration even">
                    <td>9/12</td>
                    <td>09-10, 10-12</td>
                    <td>Inför laboration + laboration</td>
                </tr>

                <tr class="laboration odd">
                    <td rowspan="4">50</td>
                    <td>13/12</td>
                    <td>08-12</td>
                    <td>Laboration 5 - Fil- och felhantering</td>
                </tr>
				<tr class="lecture odd">
					<td>14/12</td>
					<td>13-15</td>
					<td>Föreläsning - Python och webben</td>
				</tr>
				<tr class="tenta assignment odd">
					<td colspan="2">14/12</td>
                    <td><em>Deadline: Inlämningsuppgift 3</em></td>
				</tr>
                <tr class="laboration odd">
                    <td>16/10</td>
					<td>09-10, 10-12</td>
                    <td>Inför laboration + laboration</td>
                </tr>

                <tr class="laboration even">
                    <td rowspan="2">51</td>
                    <td>20/12</td>
                    <td>08-12</td>
                    <td>Laboration 6: Pyton och webben</td>
                </tr>
				<tr class="tenta assignment even">
					<td colspan="2">22/12</td>
					<td><em>Deadline: Inlämningsuppgift 4</em></td>
				</tr>

                <tr class="laboration odd">
                    <td rowspan="4">2</td>
                    <td>10/1</td>
                    <td>8-12</td>
                    <td>Laboration: Extra</td>
                </tr>
				<tr class="lecture odd">
					<td>11/1</td>
					<td>13-15</td>
					<td>Föreläsning: Extra</td>
				</tr>
                <tr class="laboration odd">
                    <td>13/1</td>
					<td>09-10, 10-12</td>
                    <td>Extra</td>
                </tr>
				<tr class="tenta assignment odd">
					<td colspan="2">13/1</td>
                    <td><em>Deadline: Inlämningsuppgift 5</em></td>
				</tr>
            </table>

            <p>*Notera att <a href="https://sv.wikipedia.org/wiki/Akademisk_kvart">akademisk kvart</a> tillämpas, vilket betyder att undervisning kör igång 15 minuter efter utsatt tid.</p>


		</div>
		<div class="col-lg-4 submenu-area">
		</div>
	</div>

	<hr>

<?php
	include "_footer.php";
?>
