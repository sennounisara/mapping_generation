<?php


/**
 * Base class that represents a query for the 'Langue' table.
 *
 * 
 *
 * @method CommonLangueQuery orderByIdLangue($order = Criteria::ASC) Order by the id_langue column
 * @method CommonLangueQuery orderByLangue($order = Criteria::ASC) Order by the langue column
 * @method CommonLangueQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method CommonLangueQuery orderByDefaut($order = Criteria::ASC) Order by the defaut column
 * @method CommonLangueQuery orderByThemeSpecifique($order = Criteria::ASC) Order by the theme_specifique column
 * @method CommonLangueQuery orderByObligatoirePourPublicationConsultation($order = Criteria::ASC) Order by the obligatoire_pour_publication_consultation column
 *
 * @method CommonLangueQuery groupByIdLangue() Group by the id_langue column
 * @method CommonLangueQuery groupByLangue() Group by the langue column
 * @method CommonLangueQuery groupByActive() Group by the active column
 * @method CommonLangueQuery groupByDefaut() Group by the defaut column
 * @method CommonLangueQuery groupByThemeSpecifique() Group by the theme_specifique column
 * @method CommonLangueQuery groupByObligatoirePourPublicationConsultation() Group by the obligatoire_pour_publication_consultation column
 *
 * @method CommonLangueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonLangueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonLangueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonLangue findOne(PropelPDO $con = null) Return the first CommonLangue matching the query
 * @method CommonLangue findOneOrCreate(PropelPDO $con = null) Return the first CommonLangue matching the query, or a new CommonLangue object populated from the query conditions when no match is found
 *
 * @method CommonLangue findOneByLangue(string $langue) Return the first CommonLangue filtered by the langue column
 * @method CommonLangue findOneByActive(string $active) Return the first CommonLangue filtered by the active column
 * @method CommonLangue findOneByDefaut(string $defaut) Return the first CommonLangue filtered by the defaut column
 * @method CommonLangue findOneByThemeSpecifique(string $theme_specifique) Return the first CommonLangue filtered by the theme_specifique column
 * @method CommonLangue findOneByObligatoirePourPublicationConsultation(string $obligatoire_pour_publication_consultation) Return the first CommonLangue filtered by the obligatoire_pour_publication_consultation column
 *
 * @method array findByIdLangue(int $id_langue) Return CommonLangue objects filtered by the id_langue column
 * @method array findByLangue(string $langue) Return CommonLangue objects filtered by the langue column
 * @method array findByActive(string $active) Return CommonLangue objects filtered by the active column
 * @method array findByDefaut(string $defaut) Return CommonLangue objects filtered by the defaut column
 * @method array findByThemeSpecifique(string $theme_specifique) Return CommonLangue objects filtered by the theme_specifique column
 * @method array findByObligatoirePourPublicationConsultation(string $obligatoire_pour_publication_consultation) Return CommonLangue objects filtered by the obligatoire_pour_publication_consultation column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonLangueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonLangueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonLangue', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonLangueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonLangueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonLangueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonLangueQuery) {
            return $criteria;
        }
        $query = new CommonLangueQuery();
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
     * @return   CommonLangue|CommonLangue[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonLanguePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonLanguePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonLangue A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdLangue($key, $con = null)
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
     * @return                 CommonLangue A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_langue`, `langue`, `active`, `defaut`, `theme_specifique`, `obligatoire_pour_publication_consultation` FROM `Langue` WHERE `id_langue` = :p0';
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
            $obj = new CommonLangue();
            $obj->hydrate($row);
            CommonLanguePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonLangue|CommonLangue[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonLangue[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonLangueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonLanguePeer::ID_LANGUE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonLangueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonLanguePeer::ID_LANGUE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_langue column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLangue(1234); // WHERE id_langue = 1234
     * $query->filterByIdLangue(array(12, 34)); // WHERE id_langue IN (12, 34)
     * $query->filterByIdLangue(array('min' => 12)); // WHERE id_langue >= 12
     * $query->filterByIdLangue(array('max' => 12)); // WHERE id_langue <= 12
     * </code>
     *
     * @param     mixed $idLangue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLangueQuery The current query, for fluid interface
     */
    public function filterByIdLangue($idLangue = null, $comparison = null)
    {
        if (is_array($idLangue)) {
            $useMinMax = false;
            if (isset($idLangue['min'])) {
                $this->addUsingAlias(CommonLanguePeer::ID_LANGUE, $idLangue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLangue['max'])) {
                $this->addUsingAlias(CommonLanguePeer::ID_LANGUE, $idLangue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonLanguePeer::ID_LANGUE, $idLangue, $comparison);
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
     * @return CommonLangueQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonLanguePeer::LANGUE, $langue, $comparison);
    }

    /**
     * Filter the query on the active column
     *
     * Example usage:
     * <code>
     * $query->filterByActive('fooValue');   // WHERE active = 'fooValue'
     * $query->filterByActive('%fooValue%'); // WHERE active LIKE '%fooValue%'
     * </code>
     *
     * @param     string $active The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLangueQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($active)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $active)) {
                $active = str_replace('*', '%', $active);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLanguePeer::ACTIVE, $active, $comparison);
    }

    /**
     * Filter the query on the defaut column
     *
     * Example usage:
     * <code>
     * $query->filterByDefaut('fooValue');   // WHERE defaut = 'fooValue'
     * $query->filterByDefaut('%fooValue%'); // WHERE defaut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $defaut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLangueQuery The current query, for fluid interface
     */
    public function filterByDefaut($defaut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($defaut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $defaut)) {
                $defaut = str_replace('*', '%', $defaut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLanguePeer::DEFAUT, $defaut, $comparison);
    }

    /**
     * Filter the query on the theme_specifique column
     *
     * Example usage:
     * <code>
     * $query->filterByThemeSpecifique('fooValue');   // WHERE theme_specifique = 'fooValue'
     * $query->filterByThemeSpecifique('%fooValue%'); // WHERE theme_specifique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $themeSpecifique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLangueQuery The current query, for fluid interface
     */
    public function filterByThemeSpecifique($themeSpecifique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($themeSpecifique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $themeSpecifique)) {
                $themeSpecifique = str_replace('*', '%', $themeSpecifique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLanguePeer::THEME_SPECIFIQUE, $themeSpecifique, $comparison);
    }

    /**
     * Filter the query on the obligatoire_pour_publication_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByObligatoirePourPublicationConsultation('fooValue');   // WHERE obligatoire_pour_publication_consultation = 'fooValue'
     * $query->filterByObligatoirePourPublicationConsultation('%fooValue%'); // WHERE obligatoire_pour_publication_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligatoirePourPublicationConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLangueQuery The current query, for fluid interface
     */
    public function filterByObligatoirePourPublicationConsultation($obligatoirePourPublicationConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligatoirePourPublicationConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligatoirePourPublicationConsultation)) {
                $obligatoirePourPublicationConsultation = str_replace('*', '%', $obligatoirePourPublicationConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLanguePeer::OBLIGATOIRE_POUR_PUBLICATION_CONSULTATION, $obligatoirePourPublicationConsultation, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonLangue $commonLangue Object to remove from the list of results
     *
     * @return CommonLangueQuery The current query, for fluid interface
     */
    public function prune($commonLangue = null)
    {
        if ($commonLangue) {
            $this->addUsingAlias(CommonLanguePeer::ID_LANGUE, $commonLangue->getIdLangue(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
