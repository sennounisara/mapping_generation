<?php


/**
 * Base class that represents a query for the 'ModeleFormulaire' table.
 *
 * 
 *
 * @method CommonModeleFormulaireQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonModeleFormulaireQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method CommonModeleFormulaireQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonModeleFormulaireQuery orderByTypeFormulaire($order = Criteria::ASC) Order by the type_formulaire column
 * @method CommonModeleFormulaireQuery orderByIdTypeProcedure($order = Criteria::ASC) Order by the id_type_procedure column
 * @method CommonModeleFormulaireQuery orderByIdCategorie($order = Criteria::ASC) Order by the id_categorie column
 * @method CommonModeleFormulaireQuery orderByCodeCpv1($order = Criteria::ASC) Order by the code_cpv_1 column
 * @method CommonModeleFormulaireQuery orderByCodeCpv2($order = Criteria::ASC) Order by the code_cpv_2 column
 * @method CommonModeleFormulaireQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonModeleFormulaireQuery orderByServiceId($order = Criteria::ASC) Order by the service_id column
 * @method CommonModeleFormulaireQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonModeleFormulaireQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 *
 * @method CommonModeleFormulaireQuery groupById() Group by the id column
 * @method CommonModeleFormulaireQuery groupByReference() Group by the reference column
 * @method CommonModeleFormulaireQuery groupByNom() Group by the nom column
 * @method CommonModeleFormulaireQuery groupByTypeFormulaire() Group by the type_formulaire column
 * @method CommonModeleFormulaireQuery groupByIdTypeProcedure() Group by the id_type_procedure column
 * @method CommonModeleFormulaireQuery groupByIdCategorie() Group by the id_categorie column
 * @method CommonModeleFormulaireQuery groupByCodeCpv1() Group by the code_cpv_1 column
 * @method CommonModeleFormulaireQuery groupByCodeCpv2() Group by the code_cpv_2 column
 * @method CommonModeleFormulaireQuery groupByOrganisme() Group by the organisme column
 * @method CommonModeleFormulaireQuery groupByServiceId() Group by the service_id column
 * @method CommonModeleFormulaireQuery groupByDateCreation() Group by the date_creation column
 * @method CommonModeleFormulaireQuery groupByDateModification() Group by the date_modification column
 *
 * @method CommonModeleFormulaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonModeleFormulaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonModeleFormulaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonModeleFormulaire findOne(PropelPDO $con = null) Return the first CommonModeleFormulaire matching the query
 * @method CommonModeleFormulaire findOneOrCreate(PropelPDO $con = null) Return the first CommonModeleFormulaire matching the query, or a new CommonModeleFormulaire object populated from the query conditions when no match is found
 *
 * @method CommonModeleFormulaire findOneByReference(string $reference) Return the first CommonModeleFormulaire filtered by the reference column
 * @method CommonModeleFormulaire findOneByNom(string $nom) Return the first CommonModeleFormulaire filtered by the nom column
 * @method CommonModeleFormulaire findOneByTypeFormulaire(int $type_formulaire) Return the first CommonModeleFormulaire filtered by the type_formulaire column
 * @method CommonModeleFormulaire findOneByIdTypeProcedure(int $id_type_procedure) Return the first CommonModeleFormulaire filtered by the id_type_procedure column
 * @method CommonModeleFormulaire findOneByIdCategorie(int $id_categorie) Return the first CommonModeleFormulaire filtered by the id_categorie column
 * @method CommonModeleFormulaire findOneByCodeCpv1(string $code_cpv_1) Return the first CommonModeleFormulaire filtered by the code_cpv_1 column
 * @method CommonModeleFormulaire findOneByCodeCpv2(string $code_cpv_2) Return the first CommonModeleFormulaire filtered by the code_cpv_2 column
 * @method CommonModeleFormulaire findOneByOrganisme(string $organisme) Return the first CommonModeleFormulaire filtered by the organisme column
 * @method CommonModeleFormulaire findOneByServiceId(int $service_id) Return the first CommonModeleFormulaire filtered by the service_id column
 * @method CommonModeleFormulaire findOneByDateCreation(string $date_creation) Return the first CommonModeleFormulaire filtered by the date_creation column
 * @method CommonModeleFormulaire findOneByDateModification(string $date_modification) Return the first CommonModeleFormulaire filtered by the date_modification column
 *
 * @method array findById(int $id) Return CommonModeleFormulaire objects filtered by the id column
 * @method array findByReference(string $reference) Return CommonModeleFormulaire objects filtered by the reference column
 * @method array findByNom(string $nom) Return CommonModeleFormulaire objects filtered by the nom column
 * @method array findByTypeFormulaire(int $type_formulaire) Return CommonModeleFormulaire objects filtered by the type_formulaire column
 * @method array findByIdTypeProcedure(int $id_type_procedure) Return CommonModeleFormulaire objects filtered by the id_type_procedure column
 * @method array findByIdCategorie(int $id_categorie) Return CommonModeleFormulaire objects filtered by the id_categorie column
 * @method array findByCodeCpv1(string $code_cpv_1) Return CommonModeleFormulaire objects filtered by the code_cpv_1 column
 * @method array findByCodeCpv2(string $code_cpv_2) Return CommonModeleFormulaire objects filtered by the code_cpv_2 column
 * @method array findByOrganisme(string $organisme) Return CommonModeleFormulaire objects filtered by the organisme column
 * @method array findByServiceId(int $service_id) Return CommonModeleFormulaire objects filtered by the service_id column
 * @method array findByDateCreation(string $date_creation) Return CommonModeleFormulaire objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonModeleFormulaire objects filtered by the date_modification column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonModeleFormulaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonModeleFormulaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonModeleFormulaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonModeleFormulaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonModeleFormulaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonModeleFormulaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonModeleFormulaireQuery) {
            return $criteria;
        }
        $query = new CommonModeleFormulaireQuery();
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
     * @return   CommonModeleFormulaire|CommonModeleFormulaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonModeleFormulairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonModeleFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonModeleFormulaire A model object, or null if the key is not found
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
     * @return                 CommonModeleFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `reference`, `nom`, `type_formulaire`, `id_type_procedure`, `id_categorie`, `code_cpv_1`, `code_cpv_2`, `organisme`, `service_id`, `date_creation`, `date_modification` FROM `ModeleFormulaire` WHERE `id` = :p0';
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
            $obj = new CommonModeleFormulaire();
            $obj->hydrate($row);
            CommonModeleFormulairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonModeleFormulaire|CommonModeleFormulaire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonModeleFormulaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonModeleFormulairePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonModeleFormulairePeer::ID, $keys, Criteria::IN);
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
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonModeleFormulairePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonModeleFormulairePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonModeleFormulairePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the reference column
     *
     * Example usage:
     * <code>
     * $query->filterByReference('fooValue');   // WHERE reference = 'fooValue'
     * $query->filterByReference('%fooValue%'); // WHERE reference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reference)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reference)) {
                $reference = str_replace('*', '%', $reference);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonModeleFormulairePeer::REFERENCE, $reference, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonModeleFormulairePeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the type_formulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeFormulaire(1234); // WHERE type_formulaire = 1234
     * $query->filterByTypeFormulaire(array(12, 34)); // WHERE type_formulaire IN (12, 34)
     * $query->filterByTypeFormulaire(array('min' => 12)); // WHERE type_formulaire >= 12
     * $query->filterByTypeFormulaire(array('max' => 12)); // WHERE type_formulaire <= 12
     * </code>
     *
     * @param     mixed $typeFormulaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
     */
    public function filterByTypeFormulaire($typeFormulaire = null, $comparison = null)
    {
        if (is_array($typeFormulaire)) {
            $useMinMax = false;
            if (isset($typeFormulaire['min'])) {
                $this->addUsingAlias(CommonModeleFormulairePeer::TYPE_FORMULAIRE, $typeFormulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeFormulaire['max'])) {
                $this->addUsingAlias(CommonModeleFormulairePeer::TYPE_FORMULAIRE, $typeFormulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonModeleFormulairePeer::TYPE_FORMULAIRE, $typeFormulaire, $comparison);
    }

    /**
     * Filter the query on the id_type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeProcedure(1234); // WHERE id_type_procedure = 1234
     * $query->filterByIdTypeProcedure(array(12, 34)); // WHERE id_type_procedure IN (12, 34)
     * $query->filterByIdTypeProcedure(array('min' => 12)); // WHERE id_type_procedure >= 12
     * $query->filterByIdTypeProcedure(array('max' => 12)); // WHERE id_type_procedure <= 12
     * </code>
     *
     * @param     mixed $idTypeProcedure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedure($idTypeProcedure = null, $comparison = null)
    {
        if (is_array($idTypeProcedure)) {
            $useMinMax = false;
            if (isset($idTypeProcedure['min'])) {
                $this->addUsingAlias(CommonModeleFormulairePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedure['max'])) {
                $this->addUsingAlias(CommonModeleFormulairePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonModeleFormulairePeer::ID_TYPE_PROCEDURE, $idTypeProcedure, $comparison);
    }

    /**
     * Filter the query on the id_categorie column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCategorie(1234); // WHERE id_categorie = 1234
     * $query->filterByIdCategorie(array(12, 34)); // WHERE id_categorie IN (12, 34)
     * $query->filterByIdCategorie(array('min' => 12)); // WHERE id_categorie >= 12
     * $query->filterByIdCategorie(array('max' => 12)); // WHERE id_categorie <= 12
     * </code>
     *
     * @param     mixed $idCategorie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdCategorie($idCategorie = null, $comparison = null)
    {
        if (is_array($idCategorie)) {
            $useMinMax = false;
            if (isset($idCategorie['min'])) {
                $this->addUsingAlias(CommonModeleFormulairePeer::ID_CATEGORIE, $idCategorie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCategorie['max'])) {
                $this->addUsingAlias(CommonModeleFormulairePeer::ID_CATEGORIE, $idCategorie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonModeleFormulairePeer::ID_CATEGORIE, $idCategorie, $comparison);
    }

    /**
     * Filter the query on the code_cpv_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeCpv1('fooValue');   // WHERE code_cpv_1 = 'fooValue'
     * $query->filterByCodeCpv1('%fooValue%'); // WHERE code_cpv_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeCpv1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
     */
    public function filterByCodeCpv1($codeCpv1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeCpv1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeCpv1)) {
                $codeCpv1 = str_replace('*', '%', $codeCpv1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonModeleFormulairePeer::CODE_CPV_1, $codeCpv1, $comparison);
    }

    /**
     * Filter the query on the code_cpv_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeCpv2('fooValue');   // WHERE code_cpv_2 = 'fooValue'
     * $query->filterByCodeCpv2('%fooValue%'); // WHERE code_cpv_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeCpv2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
     */
    public function filterByCodeCpv2($codeCpv2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeCpv2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeCpv2)) {
                $codeCpv2 = str_replace('*', '%', $codeCpv2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonModeleFormulairePeer::CODE_CPV_2, $codeCpv2, $comparison);
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
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonModeleFormulairePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the service_id column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceId(1234); // WHERE service_id = 1234
     * $query->filterByServiceId(array(12, 34)); // WHERE service_id IN (12, 34)
     * $query->filterByServiceId(array('min' => 12)); // WHERE service_id >= 12
     * $query->filterByServiceId(array('max' => 12)); // WHERE service_id <= 12
     * </code>
     *
     * @param     mixed $serviceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
     */
    public function filterByServiceId($serviceId = null, $comparison = null)
    {
        if (is_array($serviceId)) {
            $useMinMax = false;
            if (isset($serviceId['min'])) {
                $this->addUsingAlias(CommonModeleFormulairePeer::SERVICE_ID, $serviceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceId['max'])) {
                $this->addUsingAlias(CommonModeleFormulairePeer::SERVICE_ID, $serviceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonModeleFormulairePeer::SERVICE_ID, $serviceId, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('fooValue');   // WHERE date_creation = 'fooValue'
     * $query->filterByDateCreation('%fooValue%'); // WHERE date_creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCreation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCreation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCreation)) {
                $dateCreation = str_replace('*', '%', $dateCreation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonModeleFormulairePeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('fooValue');   // WHERE date_modification = 'fooValue'
     * $query->filterByDateModification('%fooValue%'); // WHERE date_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateModification)) {
                $dateModification = str_replace('*', '%', $dateModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonModeleFormulairePeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonModeleFormulaire $commonModeleFormulaire Object to remove from the list of results
     *
     * @return CommonModeleFormulaireQuery The current query, for fluid interface
     */
    public function prune($commonModeleFormulaire = null)
    {
        if ($commonModeleFormulaire) {
            $this->addUsingAlias(CommonModeleFormulairePeer::ID, $commonModeleFormulaire->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
