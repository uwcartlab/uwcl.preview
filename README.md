# uwcl.preview
Github.io domain for testing new website designs


### Backend Search Parameters

#### Search:
 *  ```q``` Match against authors' firsst and last names, tag list, category, and title (recommended)
 * ```author``` Match against the first and last name of the author(s)
 * ```journal``` = Match against the journal field in the reference ***(alpha)***
 * ```title``` = Match against the resouce title
 * ```category``` Match against the resource category (e.g., design, research)
 * ```refQ``` Match against all the fields in the provided reference(s)
 * ```tags``` Comma separated list of tags to search for
 * ```pubYear``` Match against year of publication in the reference(s)

 #### Filter:
 * ```mindate``` filter results set on the earliest date of creation. (yyyy-mm-dd)
 * ```maxdate``` filter results set the latest date of creation. (yyyy-mm-dd)
 * ```limit``` Limit query to n=```limit``` resources returned ***(alpha)***
 * ```offset``` Offset query results so that the return starts at n=```offset```
 * ```fileType``` The [mime type](https://en.wikipedia.org/wiki/Media_type) of the file.  A list of supported file types and their interpretations is [here](http://144.92.235.239:8080/mediaTypes) (must be on an SHC computer to view).

 #### Format:

 * ```sortBy``` order the results by this.  Takes values ```title``` (resource title), ```upload```(date of upload),```created```(date of creation), ```author``` (alpha by author last name). Defaults to ```upload```. ***(alpha)***
 * ```contentType``` How do you want the content returned to you? Accepts values ```json``` (JSON) and ```text/html``` (html).  Defaults to ```text/html```.
