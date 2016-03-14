# extractUpStreamDNA
Takes a GenBank file as input. Parses through and for every CDS that it finds, it extracts a pre-determined length of DNA upstream (length will be an argument).

*Note: This repository contains all the code to run on a webserver. If running locally, you only need the extractUpStreamDNA.pl file.*

### Requirements
* Perl (ActivePerl for Windows may work)
* BioPerl

### How to Run
```bash
perl extractUpStreamDNA.pl -i [yourgbkfile.gbk] -o [youroutputfile.ffn] -l [numberofbasesupstream]
```
