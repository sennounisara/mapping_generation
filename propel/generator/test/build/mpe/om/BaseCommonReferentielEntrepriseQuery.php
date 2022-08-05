<?php


/**
 * Base class that represents a query for the 'Referentiel_Entreprise' table.
 *
 * 
 *
 * @method CommonReferentielEntrepriseQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonReferentielEntrepriseQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonReferentielEntrepriseQuery orderByIdLtReferentiel($order = Criteria::ASC) Order by the id_Lt_Referentiel column
 * @method CommonReferentielEntrepriseQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonReferentielEntrepriseQuery orderByValeurPrincipaleLtReferentiel($order = Criteria::ASC) Order by the valeur_Principale_Lt_Referentiel column
 * @method CommonReferentielEntrepriseQuery orderByValeurSecondaireLtReferentiel($order = Criteria::ASC) Order by the valeur_Secondaire_Lt_Referentiel column
 *
 * @method CommonReferentielEntrepriseQuery groupById() Group by the id column
 * @method CommonReferentielEntrepriseQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonReferentielEntrepriseQuery groupByIdLtReferentiel() Group by the id_Lt_Referentiel column
 * @method CommonReferentielEntrepriseQuery groupByLot() Group by the lot column
 * @method CommonReferentielEntrepriseQuery groupByValeurPrincipaleLtReferentiel() Group by the valeur_Principale_Lt_Referentiel column
 * @method CommonReferentielEntrepriseQuery groupByValeurSecondaireLtReferentiel() Group by the valeur_Secondaire_Lt_Referentiel column
 *
 * @method CommonReferentielEntrepriseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonReferentielEntrepriseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonReferentielEntrepriseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonReferentielEntreprise findOne(PropelPDO $con = null) Return the first CommonReferentielEntreprise matching the query
 * @method CommonReferentielEntreprise findOneOrCreate(PropelPDO $con = null) Return the first CommonReferentielEntreprise matching the query, or a new CommonReferentielEntreprise object populated from the query conditions when no match is found
 *
 * @method CommonReferentielEntreprise findOneByIdEntreprise(int $id_entreprise) Return the first CommonReferentielEntreprise filtered by the id_entreprise column
 * @method CommonReferentielEntreprise findOneByIdLtReferentiel(int $id_Lt_Referentiel) Return the first CommonReferentielEntreprise filtered by the id_Lt_Referentiel column
 * @method CommonReferentielEntreprise findOneByLot(int $lot) Return the first CommonReferentielEntreprise filtered by the lot column
 * @method CommonReferentielEntreprise findOneByValeurPrincipaleLtReferentiel(string $valeur_Principale_Lt_Referentiel) Return the first CommonReferentielEntreprise filtered by the valeur_Principale_Lt_Referentiel column
 * @method CommonReferentielEntreprise findOneByValeurSecondaireLtReferentiel(string $valeur_Secondaire_Lt_Referentiel) Return the first CommonReferentielEntreprise filtered by the valeur_Secondaire_Lt_Referentiel column
 *
 * @method array findById(int $id) Return CommonReferentielEntreprise objects filtered by the id column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonReferentielEntreprise objects filtered by the id_entreprise column
 * @method array findByIdLtReferentiel(int $id_Lt_Referentiel) Return CommonReferentielEntreprise objects filtered by the id_Lt_Referentiel column
 * @method array findByLot(int $lot) Return CommonReferentielEntreprise objects filtered by the lot column
 * @method array findByValeurPrincipaleLtReferentiel(string $valeur_Principale_Lt_Referentiel) Return CommonReferentielEntreprise objects filtered by the valeur_Principale_Lt_Referentiel column
 * @method array findByValeurSecondaireLtReferentiel(string $valeur_Secondaire_Lt_Referentiel) Return CommonReferentielEntreprise objects filtered by the valeur_Secondaire_Lt_Referentiel column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonReferentielEntrepriseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonReferentielEntrepriseQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonReferentielEntreprise', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonReferentielEntrepriseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonReferentielEntrepriseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonReferentielEntrepriseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonReferentielEntrepriseQuery) {
            return $criteria;
        }
        $query = new CommonReferentielEntrepriseQuery();
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
     * @return   CommonReferentielEntreprise|CommonReferentielEntreprise[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonReferentielEntreprisePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonReferentielEntreprise A model object, or null if the key is not found
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
     * @return                 CommonReferentielEntreprise A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_entreprise`, `id_Lt_Referentiel`, `lot`, `valeur_Principale_Lt_Referentiel`, `valeur_Secondaire_Lt_Referentiel` FROM `Referentiel_Entreprise` WHERE `id` = :p0';
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
            $obj = new CommonReferentielEntreprise();
            $obj->hydrate($row);
            CommonReferentielEntreprisePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonReferentielEntreprise|CommonReferentielEntreprise[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonReferentielEntreprise[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonReferentielEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonReferentielEntreprisePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonReferentielEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonReferentielEntreprisePeer::ID, $keys, Criteria::IN);
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
     * @return CommonReferentielEntrepriseQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonReferentielEntreprisePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonReferentielEntreprisePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielEntreprisePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE id_entreprise = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE id_entreprise IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE id_entreprise >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE id_entreprise <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielEntrepriseQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonReferentielEntreprisePeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonReferentielEntreprisePeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielEntreprisePeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the id_Lt_Referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLtReferentiel(1234); // WHERE id_Lt_Referentiel = 1234
     * $query->filterByIdLtReferentiel(array(12, 34)); // WHERE id_Lt_Referentiel IN (12, 34)
     * $query->filterByIdLtReferentiel(array('min' => 12)); // WHERE id_Lt_Referentiel >= 12
     * $query->filterByIdLtReferentiel(array('max' => 12)); // WHERE id_Lt_Referentiel <= 12
     * </code>
     *
     * @param     mixed $idLtReferentiel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielEntrepriseQuery The current query, for fluid interface
     */
    public function filterByIdLtReferentiel($idLtReferentiel = null, $comparison = null)
    {
        if (is_array($idLtReferentiel)) {
            $useMinMax = false;
            if (isset($idLtReferentiel['min'])) {
                $this->addUsingAlias(CommonReferentielEntreprisePeer::ID_LT_REFERENTIEL, $idLtReferentiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLtReferentiel['max'])) {
                $this->addUsingAlias(CommonReferentielEntreprisePeer::ID_LT_REFERENTIEL, $idLtReferentiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielEntreprisePeer::ID_LT_REFERENTIEL, $idLtReferentiel, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE lot = 1234
     * $query->filterByLot(array(12, 34)); // WHERE lot IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE lot >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE lot <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielEntrepriseQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonReferentielEntreprisePeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonReferentielEntreprisePeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielEntreprisePeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the valeur_Principale_Lt_Referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurPrincipaleLtReferentiel('fooValue');   // WHERE valeur_Principale_Lt_Referentiel = 'fooValue'
     * $query->filterByValeurPrincipaleLtReferentiel('%fooValue%'); // WHERE valeur_Principale_Lt_Referentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurPrincipaleLtReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielEntrepriseQuery The current query, for fluid interface
     */
    public function filterByValeurPrincipaleLtReferentiel($valeurPrincipaleLtReferentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurPrincipaleLtReferentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurPrincipaleLtReferentiel)) {
                $valeurPrincipaleLtReferentiel = str_replace('*', '%', $valeurPrincipaleLtReferentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielEntreprisePeer::VALEUR_PRINCIPALE_LT_REFERENTIEL, $valeurPrincipaleLtReferentiel, $comparison);
    }

    /**
     * Filter the query on the valeur_Secondaire_Lt_Referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurSecondaireLtReferentiel('fooValue');   // WHERE valeur_Secondaire_Lt_Referentiel = 'fooValue'
     * $query->filterByValeurSecondaireLtReferentiel('%fooValue%'); // WHERE valeur_Secondaire_Lt_Referentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurSecondaireLtReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielEntrepriseQuery The current query, for fluid interface
     */
    public function filterByValeurSecondaireLtReferentiel($valeurSecondaireLtReferentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurSecondaireLtReferentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurSecondaireLtReferentiel)) {
                $valeurSecondaireLtReferentiel = str_replace('*', '%', $valeurSecondaireLtReferentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielEntreprisePeer::VALEUR_SECONDAIRE_LT_REFERENTIEL, $valeurSecondaireLtReferentiel, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonReferentielEntreprise $commonReferentielEntreprise Object to remove from the list of results
     *
     * @return CommonReferentielEntrepriseQuery The current query, for fluid interface
     */
    public function prune($commonReferentielEntreprise = null)
    {
        if ($commonReferentielEntreprise) {
            $this->addUsingAlias(CommonReferentielEntreprisePeer::ID, $commonReferentielEntreprise->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
