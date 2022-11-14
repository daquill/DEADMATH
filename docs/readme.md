## Introduction
((Want a html view of this page? See # Other Links # ))  
Welcome to DEADMATH  
A Dead By Daylight game made on the TI84+CE / TI84 / TI83  
Editors:  
    + Quill LRP#1745  
    + wavejumper3#5444  

## Table Of Contents
Required Files  
Optional Files  
Programming Methods  
    |^ Map Making  
        *|^ Google Sheets  
        *|^ Raw Editing  
Source Code  
Contributing  
Other Links  


# Notice
DEADMATH is a program owned by Quill LRP#1745, You are authorized to use my program for your own self, any redistrubution of this program will be in violation of these terms  
If for any reason there is another instance of this program, I will contact you asking you to remove it. If you would like to become a Contributor on this project please see ( # Contributing # )  


## Required Files
These Files are the required files for DEADMATH  

RUN4DEAD.8xp (First Startup File)
DEADMATH.8xp (Main Game File)  
DEADMAPS.8xp (More Game Maps File)  

## Optional Files [*] / Not Finished Files [**]

DEADCNFG.8xp (Extra Configuration File)  
DMAPEDIT.8xp (DEADMATH Custom Map Creation File) [A long time away from being complete]  
DBVREDIT.8xp (DEADMATH Custom Element Creation File) [Also a long time away from being complete]  

### Programming Methods
##  Map Making
We are currently using strings for map creation.  
We are basing these maps off of the original [Game](https://deadbydaylight.fandom.com/wiki/Dead_by_Daylight_Wiki) design  
If you are interested in creating maps use either of the following two methods  
# Google Sheets
If you want to design your map first then follow these steps first  
1. Create a [Google Spreadsheet](https://docs.google.com/spreadsheets/u/0/create) of a X: 60 by Y: 60  
2. Create a new sheet "+" (located bottom left of the page), name it Map Key, of X: 2 by Y: (This is up to you, Note: Smaller amount of Items on the Key/Legend is better, Recommended: 10-35 Items)  
3. Download your entire spreadsheet as a .html file format. It will download a ZIP, Then please send me that zip on discord or email me (You can find these in the # Contributing # Section of this page)  
4A. Wait until I respond to you, this can normally take a 4 Hours - 1 Day (depending on the time), (I will be releasing an easier and faster way for people to develop maps and import them right away)  
4B. Create a new program on your calculator named "CMAPDEAD", write the following lines into the CMAPDEAD program:
Things to remember:  
~ Means the store arrow (sto>>) above the on button  
QUOTES ARE IMPORTANT, Use them where ever you see them  
// Means a comment, dont need to add to the program  



// Following Line is recommended to be inputed from TI Connect CE if making a bigger map than 60x60, You would be siting here typing for a while, If TI Connect CE / Computer is not available then do at your own boredom.  
"MAPCODE"~Str0  
// Put the MAPCODE I gave you into these quotations. It should be close to 500 digits, (You can find out how much by doing the amount of Rows TIMES Columns in your spreadsheet, Example: A 60x60 Map Size will be 3600 digits, Sounds like a lot but it really isnt)  
// Following Line is recommended to be inputed from TI Connect CE, Due to size  
"MAPAUTHOR"~Str9  
// If you requested an author map name insert it into these quotations. This will convert your code into letters which will be displayed when loading your map in the main game.  
Disp "Map Successfully Saved"  

5. Run the program, If your on a TI84+CE you can execute the program by pressing Alpha + graph then by pressing 1 or pressing enter  

# Raw Editing (PC Recommended)
I would recommend using the # Google Sheets # method but incase you didnt, here is how you edit a map without a design method  
0| Space (Moves on to next tile)  
1| Wall  
2| Pallet  
3| Survivor Spawn  
4| Killer Spawn  
5| Generator  
6| Structure  
7| Exit Gate  
8| Hatch  
9| Locker  
//Skip 10 So that the string doesnt see '0' and doesnt move on to next tile  
11| Killer Belonging  
12| Breakable Door (Killer Only)  

1. Create a new project on TI Connect CE named CMAPDEAD or just create a new text file
2. I will be using a X10xY10 map design to show you how it works (Thats why using the google sheets method is better)  
3. Since I know how big my map will be we can start filling in the walls simulated by the 1's  
1111111111  
1000000001  
1000000001  
1000000001  
1000000001  
1000000001  
1000000001  
1000000001  
1000000001  
1000000001  
1111111111  
4. Now we can start adding things to the map, This method is very time consuming and not really preferred, unless you have experience in something like binary or tile editing that works like this you might be here for a while. You can join my discord anytime if you get confused  
5. Once you have your map created you can create a program on your calculator or use the CMAPDEAD program we just created and put the series of numbers into a format like: "MAPCODE"~Str0  
Optional: If you want to have a map name follow the (# Map Author Guide :RAW EDIT: # )
6. Run the program, If your on a TI84+CE you can execute the program by pressing Alpha + graph then by pressing 1 or pressing enter  


If you want to add custom elements into the game, This can either be done easily by adding on to the game by becoming a contributor (See  # Contributing # ) or by editing DBVREDIT.8xp which is allowed under the one condition that you contact me before reproducing this program  


WARNING: Customly Created Maps CANNOT exceed 80x60 barriers. If trying to import into main game, you will get this [error](https://deadmath.quilllrp.repl.co/information/error/importmap-more-max.php) code  
# RAW EDIT Map Author Guide #
The following follows the same behavior as the tile editing, we are gonna use a series of numbers then later convert that into a string but this one is alot less tedious and a lot smaller (Around 8-30 digits instead of 100-500)  

0| Space (Next Letter)  
1| A  
2| B  
3| C  
4| D  
5| E  
6| F  
7| G  
8| H  
9| I  
//Skip 10 So that the string doesnt see '0' and doesnt move on to next tile  
11| J  
12| K  
13| L  
14| M  
15| N  
16| O  
17| P  
18| Q  
19| R  
//Skip 20 So that the string doesnt see '0' and doesnt move on to next tile  
21| S  
22| T  
23| U  
24| V  
25| W  
26| X  
27| Y  
28| Z  
// Skipped 10 just so it can start even  
//Skip 40 So that the string doesnt see '0' and doesnt move on to next tile  
41| 1  
42| 2  
43| 3  
44| 4  
45| 5  
46| 6  
47| 7  
48| 8  
49| 9  
//Skip 50 So that the string doesnt see '0' and doesnt move on to next tile  
51| 0  

1. Create a text document or use the program earlier created on TI Connect CE or your calculator  
2. I will be spelling my name  
  Note Every Digit needs to be seperated by a 0 (zero), if you have a space in your name add two zeros, as demonstrated here "130130>00<130190"  
    18023090130130013019017 = Quill LRP  
3. Once you have this code, type: "AUTHORCODE"~Str9  
4. Run the program, If your on a TI84+CE you can execute the program by pressing Alpha + graph then by pressing 1 or pressing enter  


## Source Code / Contributing

# Source Code
Source Code is available to users who helped out with the project  
This may change in the future, where anyone can view it,  
# Contributing
If you would like to contribute to the project copy this template and send me an [email](mailto:mcpepro230@gmail.com)  
Or you can message me through my server on discord [Quill LRP#1745](discord.gg/k8gMAz8j48)  
Alternatively: You can make a issue on [Cemetech](https://cemetech.net)  

# Other Links
Wiki Website: [DeadMath Wiki](deadmath.quilllrp.repl.co/index.php)  
Download Link: [Google Drive](https://drive.google.com/drive/folders/1d4RFzTxrUN6dGjfiWHRwb-UhDhP48e81?usp=sharing)
