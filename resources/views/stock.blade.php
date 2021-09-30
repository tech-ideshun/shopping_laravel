<div class="short">
        <ul>
            <li>
                <a href="{{ route('product.list') }}">ALL</a>
            </li>
            <li>
                <a href="{{ route('item.list').'?fashion=1' }}">OUTER</a>
            </li>
            <li>
                <a href="{{ route('item.list').'?fashion=2' }}">TOPS</a>
            </li>
            <li>
                <a href="{{ route('item.list').'?fashion=3' }}">BOTTOMS</a>
            </li>
            <li>
                <a href="{{ route('item.list').'?fashion=4' }}">ACCESORIES</a>
            </li>
        </ul>
    </div>


    <!-- css -->
    header {
  text-align: center;
}

header a {
  text-decoration: none;
  color: black;
}

header a:hover {
  text-decoration: underline;
}

/* ulとliに中央揃えのコンボ適応 */
header ul {
  list-style: none;
  display: inline-block;
  padding: 0;
}

header li {
  display: inline;
  padding: 4px 15px;
  margin: 0 35px;
}
/* ulとliに中央揃えのコンボ適応 */

.article a {
  text-decoration: none;
  color: black;
  font-weight: bold;
}

.article a:hover {
  text-decoration: underline;
}