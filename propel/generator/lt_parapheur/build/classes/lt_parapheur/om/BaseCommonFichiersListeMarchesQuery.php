<?php


/**
 * Base class that represents a query for the 'fichiers_liste_marches' table.
 *
 * 
 *
 * @method CommonFichiersListeMarchesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonFichiersListeMarchesQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonFichiersListeMarchesQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonFichiersListeMarchesQuery orderByFichier($order = Criteria::ASC) Order by the fichier column
 * @method CommonFichiersListeMarchesQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonFichiersListeMarchesQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonFichiersListeMarchesQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 *
 * @method CommonFichiersListeMarchesQuery groupById() Group by the id column
 * @method CommonFichiersListeMarchesQuery groupByOrganisme() Group by the organisme column
 * @method CommonFichiersListeMarchesQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonFichiersListeMarchesQuery groupByFichier() Group by the fichier column
 * @method CommonFichiersListeMarchesQuery groupByHorodatage() Group by the horodatage column
 * @method CommonFichiersListeMarchesQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonFichiersListeMarchesQuery groupByTaille() Group by the taille column
 *
 * @method CommonFichiersListeMarchesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonFichiersListeMarchesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonFichiersListeMarchesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonFichiersListeMarches findOne(PropelPDO $con = null) Return the first CommonFichiersListeMarches matching the query
 * @method CommonFichiersListeMarches findOneOrCreate(PropelPDO $con = null) Return the first CommonFichiersListeMarches matching the query, or a new CommonFichiersListeMarches object populated from the query conditions when no match is found
 *
 * @method CommonFichiersListeMarches findOneById(int $id) Return the first CommonFichiersListeMarches filtered by the id column
 * @method CommonFichiersListeMarches findOneByOrganisme(string $organisme) Return the first CommonFichiersListeMarches filtered by the organisme column
 * @method CommonFichiersListeMarches findOneByNomFichier(string $nom_fichier) Return the first CommonFichiersListeMarches filtered by the nom_fichier column
 * @method CommonFichiersListeMarches findOneByFichier(string $fichier) Return the first CommonFichiersListeMarches filtered by the fichier column
 * @method CommonFichiersListeMarches findOneByHorodatage(resource $horodatage) Return the first CommonFichiersListeMarches filtered by the horodatage column
 * @method CommonFichiersListeMarches findOneByUntrusteddate(string $untrusteddate) Return the first CommonFichiersListeMarches filtered by the untrusteddate column
 * @method CommonFichiersListeMarches findOneByTaille(int $taille) Return the first CommonFichiersListeMarches filtered by the taille column
 *
 * @method array findById(int $id) Return CommonFichiersListeMarches objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonFichiersListeMarches objects filtered by the organisme column
 * @method array findByNomFichier(string $nom_fichier) Return CommonFichiersListeMarches objects filtered by the nom_fichier column
 * @method array findByFichier(string $fichier) Return CommonFichiersListeMarches objects filtered by the fichier column
 * @method array findByHorodatage(resource $horodatage) Return CommonFichiersListeMarches objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonFichiersListeMarches objects filtered by the untrusteddate column
 * @method array findByTaille(int $taille) Return CommonFichiersListeMarches objects filtered by the taille column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonFichiersListeMarchesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonFichiersListeMarchesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonFichiersListeMarches', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonFichiersListeMarchesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonFichiersListeMarchesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonFichiersListeMarchesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonFichiersListeMarchesQuery) {
            return $criteria;
        }
        $query = new CommonFichiersListeMarchesQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonFichiersListeMarches|CommonFichiersListeMarches[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonFichiersListeMarchesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonFichiersListeMarchesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonFichiersListeMarches A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `nom_fichier`, `fichier`, `horodatage`, `untrusteddate`, `taille` FROM `fichiers_liste_marches` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonFichiersListeMarches();
            $obj->hydrate($row);
            CommonFichiersListeMarchesPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonFichiersListeMarches|CommonFichiersListeMarches[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonFichiersListeMarches[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonFichiersListeMarchesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonFichiersListeMarchesPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonFichiersListeMarchesPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonFichiersListeMarchesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonFichiersListeMarchesPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonFichiersListeMarchesPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonFichiersListeMarchesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonFichiersListeMarchesPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonFichiersListeMarchesPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFichiersListeMarchesPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichiersListeMarchesQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFichiersListeMarchesPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonFichiersListeMarchesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonFichiersListeMarchesPeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByFichier('fooValue');   // WHERE fichier = 'fooValue'
     * $query->filterByFichier('%fooValue%'); // WHERE fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichiersListeMarchesQuery The current query, for fluid interface
     */
    public function filterByFichier($fichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fichier)) {
                $fichier = str_replace('*', '%', $fichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFichiersListeMarchesPeer::FICHIER, $fichier, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichiersListeMarchesQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonFichiersListeMarchesPeer::HORODATAGE, $horodatage, $comparison);
    }

    /**
     * Filter the query on the untrusteddate column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddate('fooValue');   // WHERE untrusteddate = 'fooValue'
     * $query->filterByUntrusteddate('%fooValue%'); // WHERE untrusteddate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $untrusteddate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichiersListeMarchesQuery The current query, for fluid interface
     */
    public function filterByUntrusteddate($untrusteddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($untrusteddate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $untrusteddate)) {
                $untrusteddate = str_replace('*', '%', $untrusteddate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFichiersListeMarchesPeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
    }

    /**
     * Filter the query on the taille column
     *
     * Example usage:
     * <code>
     * $query->filterByTaille(1234); // WHERE taille = 1234
     * $query->filterByTaille(array(12, 34)); // WHERE taille IN (12, 34)
     * $query->filterByTaille(array('min' => 12)); // WHERE taille >= 12
     * $query->filterByTaille(array('max' => 12)); // WHERE taille <= 12
     * </code>
     *
     * @param     mixed $taille The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichiersListeMarchesQuery The current query, for fluid interface
     */
    public function filterByTaille($taille = null, $comparison = null)
    {
        if (is_array($taille)) {
            $useMinMax = false;
            if (isset($taille['min'])) {
                $this->addUsingAlias(CommonFichiersListeMarchesPeer::TAILLE, $taille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taille['max'])) {
                $this->addUsingAlias(CommonFichiersListeMarchesPeer::TAILLE, $taille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFichiersListeMarchesPeer::TAILLE, $taille, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonFichiersListeMarches $commonFichiersListeMarches Object to remove from the list of results
     *
     * @return CommonFichiersListeMarchesQuery The current query, for fluid interface
     */
    public function prune($commonFichiersListeMarches = null)
    {
        if ($commonFichiersListeMarches) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonFichiersListeMarchesPeer::ID), $commonFichiersListeMarches->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonFichiersListeMarchesPeer::ORGANISME), $commonFichiersListeMarches->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
