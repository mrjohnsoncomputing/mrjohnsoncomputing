<?php include "../../navigation.php";?>
<?php include "pythonNavigation.php";?>
<div class="contentArea">
    <center>
        <h1 class="pageTitle">Loops in Python</h1>
        <p>Firstly - We are going to install a package manager!</p>
        <p>Why?! Because it will streamline your experience with installing any application, and will make you look like an absolute hacker when you do it off the top of your head in front of family members!</p>

        <h2 class="code-title">Windows</h2>
        <p>For Windows, we are going to install a package manager called "chocolatey".</p>
        <p>Open up a terminal by pressing the Windows key, typing "cmd" and clicking on "Run as Administrator".  Paste the following code into the terminal and press enter:</p>
        <div class="code">
            @"%SystemRoot%\System32\WindowsPowerShell\v1.0\powershell.exe" -NoProfile -InputFormat None -ExecutionPolicy Bypass -Command "iex ((New-Object System.Net.WebClient).DownloadString('https://chocolatey.org/install.ps1'))" && SET "PATH=%PATH%;%ALLUSERSPROFILE%\chocolatey\bin"
        </div>

        <h2 class="code-title">Mac</h2>
        <p>For mac, we are going to install a package manager called "homebrew".</p>
        <p>Open up a terminal by pressing command+space and searching for "Terminal". Paste the following code into the terminal and press enter:</p>
        <div class="code">
            /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
        </div>

        <p>Lets take your package manager for a test-drive!. I'm going to get you to install an Integrated Development Environment (IDE), which you can use to write and run python files.</p>
        <p>In the terminal window you opened in the last step, type in the following words:</p>
        <h2 class="code-title">Windows</h2>
        <div class="code">
            choco install vscode
        </div>
        <h2 class="code-title">Mac</h2>
        <div class="code">
            brew cask install vscode
        </div>
        <p>No go to your applications folder if on a mac, or search for the program on Windows called "Visual Studio Code".</p>
        <p>Congratulations on installing your first application with a package manager! Now lets actually do what you came here for - installing Python. We want to install the latest version of python, which at the time of writing is python3. The beauty of using a package manager is that it will download the most up to date version for us by default, so we don't need to worry!</p>
        <h2 class="code-title">Windows</h2>
        <div class="code">
            choco install python
        </div>
        <h2 class="code-title">Mac</h2>
        <div class="code">
            brew install python
        </div>
        <p>Hopefully you have noticed that we just have to change the word at the end of the line to the program that we want to install and it works! Try it out with different programs such as Steam, Spotify or PyCharm (A Python specific IDE - I recommend you check it out!)</p>
        <p>Lastly, let's just check that our installation of Python was successful.</p>
        <h2 class="code-title">Windows & Mac</h2>
        <div class="code">
            python --version
        </div>
        <p>It should print to the command line the current version - something like "Python 3.7.3"</p>
        <p>Now, if you're unsure how to get up and running - I'll introduce you to Visual Studio Code and how to get running your python code.</p>
        <p>Firstly, if running Windows, restart your computer for some of the installations to properly take effect. (Ignore this if on a Mac, they don't tend to need rebooting) If you would like to do it without using the mouse, type the following code into the terminal:</p>
        <h2 class="code-title">Windows</h2>
        <div class="code">
            shutdown /r
        </div>
        <p>Now open Visual Studio Code (if it gives you the option - use dark theme and save your eyes!). Click "File" -> "New File"</p>
        <p>This will open a blank text file. "File" -> "Save As..." and save it in your documents as "test.py" - You might have to select "Python" from a drop-down list of different programming languages / file types.</p>
        <p>This will now prompt Visual Studio Code to ask you if you want to install the Python extension - it will do this by popping up a small notifaction in the bottom right hand corner.</p>
        <p>Install it!</p>
        <p>Now write a line of python in your file to test you are up and running:</p>
        <h2 class="code-title">Python</h2>
        <div class="code">
            print("Yay! It's Working!")
        </div>
        <p>Finally, right click on your file and click on "Run Python File in Terminal". A box at the bottom of your editor should appear and run your code. If you get an error, reboot your computer and then try running your Python file again.</p>
        <p>And that's it! You are ready to program in Python at home! AND you now know a nifty way to install new applications.</p>
        <p>What now? You should definitely explore Visual Studio Code, it is much more powerful than notepad or IDLE. If you're feeling brave, download PyCharm and start getting to grips with using that - It's awesome once you get the hang of it!</P>
    </center>
</div>
<?php include "../../footer.php";?>