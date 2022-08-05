<?php


/**
 * Base class that represents a query for the 'Parametrage_Fiche_Weka' table.
 *
 * 
 *
 * @method CommonParametrageFicheWekaQuery orderByIdFiche($order = Criteria::ASC) Order by the id_fiche column
 * @method CommonParametrageFicheWekaQuery orderByPages($order = Criteria::ASC) Order by the pages column
 * @method CommonParametrageFicheWekaQuery orderByTitre($order = Criteria::ASC) Order by the titre column
 * @method CommonParametrageFicheWekaQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method CommonParametrageFicheWekaQuery orderByXml($order = Criteria::ASC) Order by the xml column
 *
 * @method CommonParametrageFicheWekaQuery groupByIdFiche() Group by the id_fiche column
 * @method CommonParametrageFicheWekaQuery groupByPages() Group by the pages column
 * @method CommonParametrageFicheWekaQuery groupByTitre() Group by the titre column
 * @method CommonParametrageFicheWekaQuery groupByUrl() Group by the url column
 * @method CommonParametrageFicheWekaQuery groupByXml() Group by the xml column
 *
 * @method CommonParametrageFicheWekaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonParametrageFicheWekaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonParametrageFicheWekaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonParametrageFicheWeka findOne(PropelPDO $con = null) Return the first CommonParametrageFicheWeka matching the query
 * @method CommonParametrageFicheWeka findOneOrCreate(PropelPDO $con = null) Return the first CommonParametrageFicheWeka matching the query, or a new CommonParametrageFicheWeka object populated from the query conditions when no match is found
 *
 * @method CommonParametrageFicheWeka findOneByPages(string $pages) Return the first CommonParametrageFicheWeka filtered by the pages column
 * @method CommonParametrageFicheWeka findOneByTitre(string $titre) Return the first CommonParametrageFicheWeka filtered by the titre column
 * @method CommonParametrageFicheWeka findOneByUrl(string $url) Return the first CommonParametrageFicheWeka filtered by the url column
 * @method CommonParametrageFicheWeka findOneByXml(string $xml) Return the first CommonParametrageFicheWeka filtered by the xml column
 *
 * @method array findByIdFiche(string $id_fiche) Return CommonParametrageFicheWeka objects filtered by the id_fiche column
 * @method array findByPages(string $pages) Return CommonParametrageFicheWeka objects filtered by the pages column
 * @method array findByTitre(string $titre) Return CommonParametrageFicheWeka objects filtered by the titre column
 * @method array findByUrl(string $url) Return CommonParametrageFicheWeka objects filtered by the url column
 * @method array findByXml(string $xml) Return CommonParametrageFicheWeka objects filtered by the xml column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonParametrageFicheWekaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonParametrageFicheWekaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonParametrageFicheWeka', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonParametrageFicheWekaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonParametrageFicheWekaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonParametrageFicheWekaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonParametrageFicheWekaQuery) {
            return $criteria;
        }
        $query = new CommonParametrageFicheWekaQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonParametrageFicheWeka|CommonParametrageFicheWeka[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonParametrageFicheWekaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonParametrageFicheWekaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonParametrageFicheWeka A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdFiche($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonParametrageFicheWeka A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_fiche`, `pages`, `titre`, `url`, `xml` FROM `Parametrage_Fiche_Weka` WHERE `id_fiche` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonParametrageFicheWeka();
            $obj->hydrate($row);
            CommonParametrageFicheWekaPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonParametrageFicheWeka|CommonParametrageFicheWeka[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonParametrageFicheWeka[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonParametrageFicheWekaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonParametrageFicheWekaPeer::ID_FICHE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonParametrageFicheWekaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonParametrageFicheWekaPeer::ID_FICHE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_fiche column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFiche('fooValue');   // WHERE id_fiche = 'fooValue'
     * $query->filterByIdFiche('%fooValue%'); // WHERE id_fiche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idFiche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageFicheWekaQuery The current query, for fluid interface
     */
    public function filterByIdFiche($idFiche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idFiche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idFiche)) {
                $idFiche = str_replace('*', '%', $idFiche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageFicheWekaPeer::ID_FICHE, $idFiche, $comparison);
    }

    /**
     * Filter the query on the pages column
     *
     * Example usage:
     * <code>
     * $query->filterByPages('fooValue');   // WHERE pages = 'fooValue'
     * $query->filterByPages('%fooValue%'); // WHERE pages LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pages The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageFicheWekaQuery The current query, for fluid interface
     */
    public function filterByPages($pages = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pages)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pages)) {
                $pages = str_replace('*', '%', $pages);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageFicheWekaPeer::PAGES, $pages, $comparison);
    }

    /**
     * Filter the query on the titre column
     *
     * Example usage:
     * <code>
     * $query->filterByTitre('fooValue');   // WHERE titre = 'fooValue'
     * $query->filterByTitre('%fooValue%'); // WHERE titre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageFicheWekaQuery The current query, for fluid interface
     */
    public function filterByTitre($titre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $titre)) {
                $titre = str_replace('*', '%', $titre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageFicheWekaPeer::TITRE, $titre, $comparison);
    }

    /**
     * Filter the query on the url column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageFicheWekaQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageFicheWekaPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the xml column
     *
     * Example usage:
     * <code>
     * $query->filterByXml('fooValue');   // WHERE xml = 'fooValue'
     * $query->filterByXml('%fooValue%'); // WHERE xml LIKE '%fooValue%'
     * </code>
     *
     * @param     string $xml The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageFicheWekaQuery The current query, for fluid interface
     */
    public function filterByXml($xml = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($xml)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $xml)) {
                $xml = str_replace('*', '%', $xml);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonParametrageFicheWekaPeer::XML, $xml, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonParametrageFicheWeka $commonParametrageFicheWeka Object to remove from the list of results
     *
     * @return CommonParametrageFicheWekaQuery The current query, for fluid interface
     */
    public function prune($commonParametrageFicheWeka = null)
    {
        if ($commonParametrageFicheWeka) {
            $this->addUsingAlias(CommonParametrageFicheWekaPeer::ID_FICHE, $commonParametrageFicheWeka->getIdFiche(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
