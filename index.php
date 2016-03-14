<html>
<head>
<title>Extract Upstream DNA</title>
</head>
<body>
<h4>Takes a Genbank file as input. Parses through and for every CDS that it finds, it extracts a pre-determined length of DNA upstream (length 
will be an argument).<br>
The sequence length will be the argument length + 3 as the initiation codon will be included.<br>
Output will be an FFN file of these upstream DNA sequences. <br>
This only WORKS for prokaryotic sequences because it does not handle Splits or Joins found in eukaryotic.<br><br>
NOTE: Please make sure that the 'locus_tag' sub-feature is found under the 'CDS' main feature.<br>
NOTE: The coordinates given in the fasta line in the FFN file are the coordinates of the extracted region.<br>
NOTE: This currently only works for linearized genomes. In the case of a circular genome, there may be no upstream regions when the gene starts at the origin.</h4>
<br>
<br>
<form name="upload" enctype="multipart/form-data" method="POST" action="results.php">
  <p>
  	<input type="hidden" name="MAX_FILE_SIZE" value="5000000000" />
    	Upload a GBK file: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    	<input name="gbkFile" type="file" size="40" />
	<br>(Max file size: 20Mb)<br>
	Upstream sequence length (default 100, max 999):<input type="text" name="UPSLENGTH" size="3" MAXLENGTH=3 value="100"><br>
	<input type="submit" name="upload" value="Submit" />
  </p>
  <br>
</form>

Please help us improve this tool by sending any questions or comments to <b>Andre.Villegas[at]oahpp.ca</b>.
</body>
</html>
