<?php


/**
 * Base class that represents a query for the 'ReponseInscritItemFormulaireConsultationValues' table.
 *
 * 
 *
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery orderByIditemformulaireconsultation($order = Criteria::ASC) Order by the idItemFormulaireConsultation column
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery orderByIdreponseinscrititemformulaireconsultation($order = Criteria::ASC) Order by the idReponseInscritItemFormulaireConsultation column
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery orderByValeur($order = Criteria::ASC) Order by the valeur column
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery orderByTypeValeur($order = Criteria::ASC) Order by the type_valeur column
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery orderByPrecisionEntreprise($order = Criteria::ASC) Order by the precision_entreprise column
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery orderByPrixUnitaire($order = Criteria::ASC) Order by the prix_unitaire column
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery orderByTva($order = Criteria::ASC) Order by the tva column
 *
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery groupById() Group by the id column
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery groupByIditemformulaireconsultation() Group by the idItemFormulaireConsultation column
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery groupByIdreponseinscrititemformulaireconsultation() Group by the idReponseInscritItemFormulaireConsultation column
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery groupByValeur() Group by the valeur column
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery groupByTypeValeur() Group by the type_valeur column
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery groupByPrecisionEntreprise() Group by the precision_entreprise column
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery groupByPrixUnitaire() Group by the prix_unitaire column
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery groupByTva() Group by the tva column
 *
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonReponseInscritItemFormulaireConsultationValuesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonReponseInscritItemFormulaireConsultationValues findOne(PropelPDO $con = null) Return the first CommonReponseInscritItemFormulaireConsultationValues matching the query
 * @method CommonReponseInscritItemFormulaireConsultationValues findOneOrCreate(PropelPDO $con = null) Return the first CommonReponseInscritItemFormulaireConsultationValues matching the query, or a new CommonReponseInscritItemFormulaireConsultationValues object populated from the query conditions when no match is found
 *
 * @method CommonReponseInscritItemFormulaireConsultationValues findOneByIditemformulaireconsultation(int $idItemFormulaireConsultation) Return the first CommonReponseInscritItemFormulaireConsultationValues filtered by the idItemFormulaireConsultation column
 * @method CommonReponseInscritItemFormulaireConsultationValues findOneByIdreponseinscrititemformulaireconsultation(int $idReponseInscritItemFormulaireConsultation) Return the first CommonReponseInscritItemFormulaireConsultationValues filtered by the idReponseInscritItemFormulaireConsultation column
 * @method CommonReponseInscritItemFormulaireConsultationValues findOneByValeur(string $valeur) Return the first CommonReponseInscritItemFormulaireConsultationValues filtered by the valeur column
 * @method CommonReponseInscritItemFormulaireConsultationValues findOneByTypeValeur(int $type_valeur) Return the first CommonReponseInscritItemFormulaireConsultationValues filtered by the type_valeur column
 * @method CommonReponseInscritItemFormulaireConsultationValues findOneByPrecisionEntreprise(string $precision_entreprise) Return the first CommonReponseInscritItemFormulaireConsultationValues filtered by the precision_entreprise column
 * @method CommonReponseInscritItemFormulaireConsultationValues findOneByPrixUnitaire(string $prix_unitaire) Return the first CommonReponseInscritItemFormulaireConsultationValues filtered by the prix_unitaire column
 * @method CommonReponseInscritItemFormulaireConsultationValues findOneByTva(string $tva) Return the first CommonReponseInscritItemFormulaireConsultationValues filtered by the tva column
 *
 * @method array findById(int $id) Return CommonReponseInscritItemFormulaireConsultationValues objects filtered by the id column
 * @method array findByIditemformulaireconsultation(int $idItemFormulaireConsultation) Return CommonReponseInscritItemFormulaireConsultationValues objects filtered by the idItemFormulaireConsultation column
 * @method array findByIdreponseinscrititemformulaireconsultation(int $idReponseInscritItemFormulaireConsultation) Return CommonReponseInscritItemFormulaireConsultationValues objects filtered by the idReponseInscritItemFormulaireConsultation column
 * @method array findByValeur(string $valeur) Return CommonReponseInscritItemFormulaireConsultationValues objects filtered by the valeur column
 * @method array findByTypeValeur(int $type_valeur) Return CommonReponseInscritItemFormulaireConsultationValues objects filtered by the type_valeur column
 * @method array findByPrecisionEntreprise(string $precision_entreprise) Return CommonReponseInscritItemFormulaireConsultationValues objects filtered by the precision_entreprise column
 * @method array findByPrixUnitaire(string $prix_unitaire) Return CommonReponseInscritItemFormulaireConsultationValues objects filtered by the prix_unitaire column
 * @method array findByTva(string $tva) Return CommonReponseInscritItemFormulaireConsultationValues objects filtered by the tva column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonReponseInscritItemFormulaireConsultationValuesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonReponseInscritItemFormulaireConsultationValuesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonReponseInscritItemFormulaireConsultationValues', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonReponseInscritItemFormulaireConsultationValuesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonReponseInscritItemFormulaireConsultationValuesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonReponseInscritItemFormulaireConsultationValuesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonReponseInscritItemFormulaireConsultationValuesQuery) {
            return $criteria;
        }
        $query = new CommonReponseInscritItemFormulaireConsultationValuesQuery();
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
     * @return   CommonReponseInscritItemFormulaireConsultationValues|CommonReponseInscritItemFormulaireConsultationValues[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonReponseInscritItemFormulaireConsultationValuesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonReponseInscritItemFormulaireConsultationValuesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonReponseInscritItemFormulaireConsultationValues A model object, or null if the key is not found
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
     * @return                 CommonReponseInscritItemFormulaireConsultationValues A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idItemFormulaireConsultation`, `idReponseInscritItemFormulaireConsultation`, `valeur`, `type_valeur`, `precision_entreprise`, `prix_unitaire`, `tva` FROM `ReponseInscritItemFormulaireConsultationValues` WHERE `id` = :p0';
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
            $obj = new CommonReponseInscritItemFormulaireConsultationValues();
            $obj->hydrate($row);
            CommonReponseInscritItemFormulaireConsultationValuesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonReponseInscritItemFormulaireConsultationValues|CommonReponseInscritItemFormulaireConsultationValues[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonReponseInscritItemFormulaireConsultationValues[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonReponseInscritItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonReponseInscritItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::ID, $keys, Criteria::IN);
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
     * @return CommonReponseInscritItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the idItemFormulaireConsultation column
     *
     * Example usage:
     * <code>
     * $query->filterByIditemformulaireconsultation(1234); // WHERE idItemFormulaireConsultation = 1234
     * $query->filterByIditemformulaireconsultation(array(12, 34)); // WHERE idItemFormulaireConsultation IN (12, 34)
     * $query->filterByIditemformulaireconsultation(array('min' => 12)); // WHERE idItemFormulaireConsultation >= 12
     * $query->filterByIditemformulaireconsultation(array('max' => 12)); // WHERE idItemFormulaireConsultation <= 12
     * </code>
     *
     * @param     mixed $iditemformulaireconsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReponseInscritItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterByIditemformulaireconsultation($iditemformulaireconsultation = null, $comparison = null)
    {
        if (is_array($iditemformulaireconsultation)) {
            $useMinMax = false;
            if (isset($iditemformulaireconsultation['min'])) {
                $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::IDITEMFORMULAIRECONSULTATION, $iditemformulaireconsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iditemformulaireconsultation['max'])) {
                $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::IDITEMFORMULAIRECONSULTATION, $iditemformulaireconsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::IDITEMFORMULAIRECONSULTATION, $iditemformulaireconsultation, $comparison);
    }

    /**
     * Filter the query on the idReponseInscritItemFormulaireConsultation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdreponseinscrititemformulaireconsultation(1234); // WHERE idReponseInscritItemFormulaireConsultation = 1234
     * $query->filterByIdreponseinscrititemformulaireconsultation(array(12, 34)); // WHERE idReponseInscritItemFormulaireConsultation IN (12, 34)
     * $query->filterByIdreponseinscrititemformulaireconsultation(array('min' => 12)); // WHERE idReponseInscritItemFormulaireConsultation >= 12
     * $query->filterByIdreponseinscrititemformulaireconsultation(array('max' => 12)); // WHERE idReponseInscritItemFormulaireConsultation <= 12
     * </code>
     *
     * @param     mixed $idreponseinscrititemformulaireconsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReponseInscritItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterByIdreponseinscrititemformulaireconsultation($idreponseinscrititemformulaireconsultation = null, $comparison = null)
    {
        if (is_array($idreponseinscrititemformulaireconsultation)) {
            $useMinMax = false;
            if (isset($idreponseinscrititemformulaireconsultation['min'])) {
                $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::IDREPONSEINSCRITITEMFORMULAIRECONSULTATION, $idreponseinscrititemformulaireconsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idreponseinscrititemformulaireconsultation['max'])) {
                $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::IDREPONSEINSCRITITEMFORMULAIRECONSULTATION, $idreponseinscrititemformulaireconsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::IDREPONSEINSCRITITEMFORMULAIRECONSULTATION, $idreponseinscrititemformulaireconsultation, $comparison);
    }

    /**
     * Filter the query on the valeur column
     *
     * Example usage:
     * <code>
     * $query->filterByValeur('fooValue');   // WHERE valeur = 'fooValue'
     * $query->filterByValeur('%fooValue%'); // WHERE valeur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReponseInscritItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterByValeur($valeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeur)) {
                $valeur = str_replace('*', '%', $valeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::VALEUR, $valeur, $comparison);
    }

    /**
     * Filter the query on the type_valeur column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeValeur(1234); // WHERE type_valeur = 1234
     * $query->filterByTypeValeur(array(12, 34)); // WHERE type_valeur IN (12, 34)
     * $query->filterByTypeValeur(array('min' => 12)); // WHERE type_valeur >= 12
     * $query->filterByTypeValeur(array('max' => 12)); // WHERE type_valeur <= 12
     * </code>
     *
     * @param     mixed $typeValeur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReponseInscritItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterByTypeValeur($typeValeur = null, $comparison = null)
    {
        if (is_array($typeValeur)) {
            $useMinMax = false;
            if (isset($typeValeur['min'])) {
                $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::TYPE_VALEUR, $typeValeur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeValeur['max'])) {
                $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::TYPE_VALEUR, $typeValeur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::TYPE_VALEUR, $typeValeur, $comparison);
    }

    /**
     * Filter the query on the precision_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByPrecisionEntreprise('fooValue');   // WHERE precision_entreprise = 'fooValue'
     * $query->filterByPrecisionEntreprise('%fooValue%'); // WHERE precision_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $precisionEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReponseInscritItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterByPrecisionEntreprise($precisionEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($precisionEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $precisionEntreprise)) {
                $precisionEntreprise = str_replace('*', '%', $precisionEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::PRECISION_ENTREPRISE, $precisionEntreprise, $comparison);
    }

    /**
     * Filter the query on the prix_unitaire column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixUnitaire('fooValue');   // WHERE prix_unitaire = 'fooValue'
     * $query->filterByPrixUnitaire('%fooValue%'); // WHERE prix_unitaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prixUnitaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReponseInscritItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterByPrixUnitaire($prixUnitaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prixUnitaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prixUnitaire)) {
                $prixUnitaire = str_replace('*', '%', $prixUnitaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::PRIX_UNITAIRE, $prixUnitaire, $comparison);
    }

    /**
     * Filter the query on the tva column
     *
     * Example usage:
     * <code>
     * $query->filterByTva('fooValue');   // WHERE tva = 'fooValue'
     * $query->filterByTva('%fooValue%'); // WHERE tva LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tva The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReponseInscritItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterByTva($tva = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tva)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tva)) {
                $tva = str_replace('*', '%', $tva);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::TVA, $tva, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonReponseInscritItemFormulaireConsultationValues $commonReponseInscritItemFormulaireConsultationValues Object to remove from the list of results
     *
     * @return CommonReponseInscritItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function prune($commonReponseInscritItemFormulaireConsultationValues = null)
    {
        if ($commonReponseInscritItemFormulaireConsultationValues) {
            $this->addUsingAlias(CommonReponseInscritItemFormulaireConsultationValuesPeer::ID, $commonReponseInscritItemFormulaireConsultationValues->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
