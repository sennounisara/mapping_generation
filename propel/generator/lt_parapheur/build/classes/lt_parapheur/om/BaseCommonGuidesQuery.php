<?php


/**
 * Base class that represents a query for the 'Guides' table.
 *
 * 
 *
 * @method CommonGuidesQuery orderByIdGuide($order = Criteria::ASC) Order by the id_guide column
 * @method CommonGuidesQuery orderByAccesFrom($order = Criteria::ASC) Order by the acces_from column
 * @method CommonGuidesQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method CommonGuidesQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonGuidesQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonGuidesQuery orderByLangue($order = Criteria::ASC) Order by the langue column
 *
 * @method CommonGuidesQuery groupByIdGuide() Group by the id_guide column
 * @method CommonGuidesQuery groupByAccesFrom() Group by the acces_from column
 * @method CommonGuidesQuery groupByType() Group by the type column
 * @method CommonGuidesQuery groupByLibelle() Group by the libelle column
 * @method CommonGuidesQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonGuidesQuery groupByLangue() Group by the langue column
 *
 * @method CommonGuidesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonGuidesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonGuidesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonGuides findOne(PropelPDO $con = null) Return the first CommonGuides matching the query
 * @method CommonGuides findOneOrCreate(PropelPDO $con = null) Return the first CommonGuides matching the query, or a new CommonGuides object populated from the query conditions when no match is found
 *
 * @method CommonGuides findOneByAccesFrom(string $acces_from) Return the first CommonGuides filtered by the acces_from column
 * @method CommonGuides findOneByType(string $type) Return the first CommonGuides filtered by the type column
 * @method CommonGuides findOneByLibelle(string $libelle) Return the first CommonGuides filtered by the libelle column
 * @method CommonGuides findOneByNomFichier(string $nom_fichier) Return the first CommonGuides filtered by the nom_fichier column
 * @method CommonGuides findOneByLangue(string $langue) Return the first CommonGuides filtered by the langue column
 *
 * @method array findByIdGuide(int $id_guide) Return CommonGuides objects filtered by the id_guide column
 * @method array findByAccesFrom(string $acces_from) Return CommonGuides objects filtered by the acces_from column
 * @method array findByType(string $type) Return CommonGuides objects filtered by the type column
 * @method array findByLibelle(string $libelle) Return CommonGuides objects filtered by the libelle column
 * @method array findByNomFichier(string $nom_fichier) Return CommonGuides objects filtered by the nom_fichier column
 * @method array findByLangue(string $langue) Return CommonGuides objects filtered by the langue column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonGuidesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonGuidesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonGuides', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonGuidesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonGuidesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonGuidesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonGuidesQuery) {
            return $criteria;
        }
        $query = new CommonGuidesQuery();
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
     * @return   CommonGuides|CommonGuides[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonGuidesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonGuidesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonGuides A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdGuide($key, $con = null)
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
     * @return                 CommonGuides A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_guide`, `acces_from`, `type`, `libelle`, `nom_fichier`, `langue` FROM `Guides` WHERE `id_guide` = :p0';
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
            $obj = new CommonGuides();
            $obj->hydrate($row);
            CommonGuidesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonGuides|CommonGuides[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonGuides[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonGuidesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonGuidesPeer::ID_GUIDE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonGuidesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonGuidesPeer::ID_GUIDE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_guide column
     *
     * Example usage:
     * <code>
     * $query->filterByIdGuide(1234); // WHERE id_guide = 1234
     * $query->filterByIdGuide(array(12, 34)); // WHERE id_guide IN (12, 34)
     * $query->filterByIdGuide(array('min' => 12)); // WHERE id_guide >= 12
     * $query->filterByIdGuide(array('max' => 12)); // WHERE id_guide <= 12
     * </code>
     *
     * @param     mixed $idGuide The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGuidesQuery The current query, for fluid interface
     */
    public function filterByIdGuide($idGuide = null, $comparison = null)
    {
        if (is_array($idGuide)) {
            $useMinMax = false;
            if (isset($idGuide['min'])) {
                $this->addUsingAlias(CommonGuidesPeer::ID_GUIDE, $idGuide['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idGuide['max'])) {
                $this->addUsingAlias(CommonGuidesPeer::ID_GUIDE, $idGuide['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonGuidesPeer::ID_GUIDE, $idGuide, $comparison);
    }

    /**
     * Filter the query on the acces_from column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesFrom('fooValue');   // WHERE acces_from = 'fooValue'
     * $query->filterByAccesFrom('%fooValue%'); // WHERE acces_from LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesFrom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGuidesQuery The current query, for fluid interface
     */
    public function filterByAccesFrom($accesFrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesFrom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesFrom)) {
                $accesFrom = str_replace('*', '%', $accesFrom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGuidesPeer::ACCES_FROM, $accesFrom, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGuidesQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGuidesPeer::TYPE, $type, $comparison);
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
     * @return CommonGuidesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonGuidesPeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonGuidesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonGuidesPeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the langue column
     *
     * Example usage:
     * <code>
     * $query->filterByLangue('fooValue');   // WHERE langue = 'fooValue'
     * $query->filterByLangue('%fooValue%'); // WHERE langue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $langue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGuidesQuery The current query, for fluid interface
     */
    public function filterByLangue($langue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($langue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $langue)) {
                $langue = str_replace('*', '%', $langue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGuidesPeer::LANGUE, $langue, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonGuides $commonGuides Object to remove from the list of results
     *
     * @return CommonGuidesQuery The current query, for fluid interface
     */
    public function prune($commonGuides = null)
    {
        if ($commonGuides) {
            $this->addUsingAlias(CommonGuidesPeer::ID_GUIDE, $commonGuides->getIdGuide(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
