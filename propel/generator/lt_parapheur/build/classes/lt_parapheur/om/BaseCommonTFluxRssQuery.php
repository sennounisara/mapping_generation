<?php


/**
 * Base class that represents a query for the 't_flux_rss' table.
 *
 * 
 *
 * @method CommonTFluxRssQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTFluxRssQuery orderByTenderXml($order = Criteria::ASC) Order by the tender_xml column
 * @method CommonTFluxRssQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonTFluxRssQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonTFluxRssQuery orderByModule($order = Criteria::ASC) Order by the module column
 * @method CommonTFluxRssQuery orderByAfficherFluxRss($order = Criteria::ASC) Order by the afficher_flux_rss column
 *
 * @method CommonTFluxRssQuery groupById() Group by the id column
 * @method CommonTFluxRssQuery groupByTenderXml() Group by the tender_xml column
 * @method CommonTFluxRssQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonTFluxRssQuery groupByLibelle() Group by the libelle column
 * @method CommonTFluxRssQuery groupByModule() Group by the module column
 * @method CommonTFluxRssQuery groupByAfficherFluxRss() Group by the afficher_flux_rss column
 *
 * @method CommonTFluxRssQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTFluxRssQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTFluxRssQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTFluxRss findOne(PropelPDO $con = null) Return the first CommonTFluxRss matching the query
 * @method CommonTFluxRss findOneOrCreate(PropelPDO $con = null) Return the first CommonTFluxRss matching the query, or a new CommonTFluxRss object populated from the query conditions when no match is found
 *
 * @method CommonTFluxRss findOneByTenderXml(string $tender_xml) Return the first CommonTFluxRss filtered by the tender_xml column
 * @method CommonTFluxRss findOneByNomFichier(string $nom_fichier) Return the first CommonTFluxRss filtered by the nom_fichier column
 * @method CommonTFluxRss findOneByLibelle(string $libelle) Return the first CommonTFluxRss filtered by the libelle column
 * @method CommonTFluxRss findOneByModule(string $module) Return the first CommonTFluxRss filtered by the module column
 * @method CommonTFluxRss findOneByAfficherFluxRss(string $afficher_flux_rss) Return the first CommonTFluxRss filtered by the afficher_flux_rss column
 *
 * @method array findById(int $id) Return CommonTFluxRss objects filtered by the id column
 * @method array findByTenderXml(string $tender_xml) Return CommonTFluxRss objects filtered by the tender_xml column
 * @method array findByNomFichier(string $nom_fichier) Return CommonTFluxRss objects filtered by the nom_fichier column
 * @method array findByLibelle(string $libelle) Return CommonTFluxRss objects filtered by the libelle column
 * @method array findByModule(string $module) Return CommonTFluxRss objects filtered by the module column
 * @method array findByAfficherFluxRss(string $afficher_flux_rss) Return CommonTFluxRss objects filtered by the afficher_flux_rss column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTFluxRssQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTFluxRssQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTFluxRss', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTFluxRssQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTFluxRssQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTFluxRssQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTFluxRssQuery) {
            return $criteria;
        }
        $query = new CommonTFluxRssQuery();
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
     * @return   CommonTFluxRss|CommonTFluxRss[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTFluxRssPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTFluxRssPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTFluxRss A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
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
     * @return                 CommonTFluxRss A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `tender_xml`, `nom_fichier`, `libelle`, `module`, `afficher_flux_rss` FROM `t_flux_rss` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTFluxRss();
            $obj->hydrate($row);
            CommonTFluxRssPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTFluxRss|CommonTFluxRss[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTFluxRss[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTFluxRssQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTFluxRssPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTFluxRssQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTFluxRssPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFluxRssQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTFluxRssPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTFluxRssPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFluxRssPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the tender_xml column
     *
     * Example usage:
     * <code>
     * $query->filterByTenderXml('fooValue');   // WHERE tender_xml = 'fooValue'
     * $query->filterByTenderXml('%fooValue%'); // WHERE tender_xml LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tenderXml The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFluxRssQuery The current query, for fluid interface
     */
    public function filterByTenderXml($tenderXml = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tenderXml)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tenderXml)) {
                $tenderXml = str_replace('*', '%', $tenderXml);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTFluxRssPeer::TENDER_XML, $tenderXml, $comparison);
    }

    /**
     * Filter the query on the nom_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichier('fooValue');   // WHERE nom_fichier = 'fooValue'
     * $query->filterByNomFichier('%fooValue%'); // WHERE nom_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFluxRssQuery The current query, for fluid interface
     */
    public function filterByNomFichier($nomFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichier)) {
                $nomFichier = str_replace('*', '%', $nomFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTFluxRssPeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFluxRssQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTFluxRssPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the module column
     *
     * Example usage:
     * <code>
     * $query->filterByModule('fooValue');   // WHERE module = 'fooValue'
     * $query->filterByModule('%fooValue%'); // WHERE module LIKE '%fooValue%'
     * </code>
     *
     * @param     string $module The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFluxRssQuery The current query, for fluid interface
     */
    public function filterByModule($module = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($module)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $module)) {
                $module = str_replace('*', '%', $module);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTFluxRssPeer::MODULE, $module, $comparison);
    }

    /**
     * Filter the query on the afficher_flux_rss column
     *
     * Example usage:
     * <code>
     * $query->filterByAfficherFluxRss('fooValue');   // WHERE afficher_flux_rss = 'fooValue'
     * $query->filterByAfficherFluxRss('%fooValue%'); // WHERE afficher_flux_rss LIKE '%fooValue%'
     * </code>
     *
     * @param     string $afficherFluxRss The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFluxRssQuery The current query, for fluid interface
     */
    public function filterByAfficherFluxRss($afficherFluxRss = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($afficherFluxRss)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $afficherFluxRss)) {
                $afficherFluxRss = str_replace('*', '%', $afficherFluxRss);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTFluxRssPeer::AFFICHER_FLUX_RSS, $afficherFluxRss, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTFluxRss $commonTFluxRss Object to remove from the list of results
     *
     * @return CommonTFluxRssQuery The current query, for fluid interface
     */
    public function prune($commonTFluxRss = null)
    {
        if ($commonTFluxRss) {
            $this->addUsingAlias(CommonTFluxRssPeer::ID, $commonTFluxRss->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
