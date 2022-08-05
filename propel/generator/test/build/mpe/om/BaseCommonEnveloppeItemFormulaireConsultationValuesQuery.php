<?php


/**
 * Base class that represents a query for the 'EnveloppeItemFormulaireConsultationValues' table.
 *
 * 
 *
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery orderByIditemformulaireconsultation($order = Criteria::ASC) Order by the idItemFormulaireConsultation column
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery orderByIdenveloppeformulaireconsultation($order = Criteria::ASC) Order by the idEnveloppeFormulaireConsultation column
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery orderByValeur($order = Criteria::ASC) Order by the valeur column
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery orderByTypeValeur($order = Criteria::ASC) Order by the type_valeur column
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery orderByPrecisionEntreprise($order = Criteria::ASC) Order by the precision_entreprise column
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery orderByPrixUnitaire($order = Criteria::ASC) Order by the prix_unitaire column
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery orderByTva($order = Criteria::ASC) Order by the tva column
 *
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery groupById() Group by the id column
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery groupByIditemformulaireconsultation() Group by the idItemFormulaireConsultation column
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery groupByIdenveloppeformulaireconsultation() Group by the idEnveloppeFormulaireConsultation column
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery groupByValeur() Group by the valeur column
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery groupByTypeValeur() Group by the type_valeur column
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery groupByPrecisionEntreprise() Group by the precision_entreprise column
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery groupByPrixUnitaire() Group by the prix_unitaire column
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery groupByTva() Group by the tva column
 *
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery leftJoinCommonItemFormulaireConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonItemFormulaireConsultation relation
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery rightJoinCommonItemFormulaireConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonItemFormulaireConsultation relation
 * @method CommonEnveloppeItemFormulaireConsultationValuesQuery innerJoinCommonItemFormulaireConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonItemFormulaireConsultation relation
 *
 * @method CommonEnveloppeItemFormulaireConsultationValues findOne(PropelPDO $con = null) Return the first CommonEnveloppeItemFormulaireConsultationValues matching the query
 * @method CommonEnveloppeItemFormulaireConsultationValues findOneOrCreate(PropelPDO $con = null) Return the first CommonEnveloppeItemFormulaireConsultationValues matching the query, or a new CommonEnveloppeItemFormulaireConsultationValues object populated from the query conditions when no match is found
 *
 * @method CommonEnveloppeItemFormulaireConsultationValues findOneByIditemformulaireconsultation(int $idItemFormulaireConsultation) Return the first CommonEnveloppeItemFormulaireConsultationValues filtered by the idItemFormulaireConsultation column
 * @method CommonEnveloppeItemFormulaireConsultationValues findOneByIdenveloppeformulaireconsultation(int $idEnveloppeFormulaireConsultation) Return the first CommonEnveloppeItemFormulaireConsultationValues filtered by the idEnveloppeFormulaireConsultation column
 * @method CommonEnveloppeItemFormulaireConsultationValues findOneByValeur(string $valeur) Return the first CommonEnveloppeItemFormulaireConsultationValues filtered by the valeur column
 * @method CommonEnveloppeItemFormulaireConsultationValues findOneByTypeValeur(int $type_valeur) Return the first CommonEnveloppeItemFormulaireConsultationValues filtered by the type_valeur column
 * @method CommonEnveloppeItemFormulaireConsultationValues findOneByPrecisionEntreprise(string $precision_entreprise) Return the first CommonEnveloppeItemFormulaireConsultationValues filtered by the precision_entreprise column
 * @method CommonEnveloppeItemFormulaireConsultationValues findOneByPrixUnitaire(string $prix_unitaire) Return the first CommonEnveloppeItemFormulaireConsultationValues filtered by the prix_unitaire column
 * @method CommonEnveloppeItemFormulaireConsultationValues findOneByTva(string $tva) Return the first CommonEnveloppeItemFormulaireConsultationValues filtered by the tva column
 *
 * @method array findById(int $id) Return CommonEnveloppeItemFormulaireConsultationValues objects filtered by the id column
 * @method array findByIditemformulaireconsultation(int $idItemFormulaireConsultation) Return CommonEnveloppeItemFormulaireConsultationValues objects filtered by the idItemFormulaireConsultation column
 * @method array findByIdenveloppeformulaireconsultation(int $idEnveloppeFormulaireConsultation) Return CommonEnveloppeItemFormulaireConsultationValues objects filtered by the idEnveloppeFormulaireConsultation column
 * @method array findByValeur(string $valeur) Return CommonEnveloppeItemFormulaireConsultationValues objects filtered by the valeur column
 * @method array findByTypeValeur(int $type_valeur) Return CommonEnveloppeItemFormulaireConsultationValues objects filtered by the type_valeur column
 * @method array findByPrecisionEntreprise(string $precision_entreprise) Return CommonEnveloppeItemFormulaireConsultationValues objects filtered by the precision_entreprise column
 * @method array findByPrixUnitaire(string $prix_unitaire) Return CommonEnveloppeItemFormulaireConsultationValues objects filtered by the prix_unitaire column
 * @method array findByTva(string $tva) Return CommonEnveloppeItemFormulaireConsultationValues objects filtered by the tva column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEnveloppeItemFormulaireConsultationValuesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEnveloppeItemFormulaireConsultationValuesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEnveloppeItemFormulaireConsultationValues', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEnveloppeItemFormulaireConsultationValuesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEnveloppeItemFormulaireConsultationValuesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEnveloppeItemFormulaireConsultationValuesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEnveloppeItemFormulaireConsultationValuesQuery) {
            return $criteria;
        }
        $query = new CommonEnveloppeItemFormulaireConsultationValuesQuery();
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
     * @return   CommonEnveloppeItemFormulaireConsultationValues|CommonEnveloppeItemFormulaireConsultationValues[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEnveloppeItemFormulaireConsultationValuesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppeItemFormulaireConsultationValuesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnveloppeItemFormulaireConsultationValues A model object, or null if the key is not found
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
     * @return                 CommonEnveloppeItemFormulaireConsultationValues A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idItemFormulaireConsultation`, `idEnveloppeFormulaireConsultation`, `valeur`, `type_valeur`, `precision_entreprise`, `prix_unitaire`, `tva` FROM `EnveloppeItemFormulaireConsultationValues` WHERE `id` = :p0';
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
            $obj = new CommonEnveloppeItemFormulaireConsultationValues();
            $obj->hydrate($row);
            CommonEnveloppeItemFormulaireConsultationValuesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonEnveloppeItemFormulaireConsultationValues|CommonEnveloppeItemFormulaireConsultationValues[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEnveloppeItemFormulaireConsultationValues[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEnveloppeItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEnveloppeItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::ID, $keys, Criteria::IN);
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
     * @return CommonEnveloppeItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::ID, $id, $comparison);
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
     * @see       filterByCommonItemFormulaireConsultation()
     *
     * @param     mixed $iditemformulaireconsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterByIditemformulaireconsultation($iditemformulaireconsultation = null, $comparison = null)
    {
        if (is_array($iditemformulaireconsultation)) {
            $useMinMax = false;
            if (isset($iditemformulaireconsultation['min'])) {
                $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::IDITEMFORMULAIRECONSULTATION, $iditemformulaireconsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iditemformulaireconsultation['max'])) {
                $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::IDITEMFORMULAIRECONSULTATION, $iditemformulaireconsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::IDITEMFORMULAIRECONSULTATION, $iditemformulaireconsultation, $comparison);
    }

    /**
     * Filter the query on the idEnveloppeFormulaireConsultation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdenveloppeformulaireconsultation(1234); // WHERE idEnveloppeFormulaireConsultation = 1234
     * $query->filterByIdenveloppeformulaireconsultation(array(12, 34)); // WHERE idEnveloppeFormulaireConsultation IN (12, 34)
     * $query->filterByIdenveloppeformulaireconsultation(array('min' => 12)); // WHERE idEnveloppeFormulaireConsultation >= 12
     * $query->filterByIdenveloppeformulaireconsultation(array('max' => 12)); // WHERE idEnveloppeFormulaireConsultation <= 12
     * </code>
     *
     * @param     mixed $idenveloppeformulaireconsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterByIdenveloppeformulaireconsultation($idenveloppeformulaireconsultation = null, $comparison = null)
    {
        if (is_array($idenveloppeformulaireconsultation)) {
            $useMinMax = false;
            if (isset($idenveloppeformulaireconsultation['min'])) {
                $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::IDENVELOPPEFORMULAIRECONSULTATION, $idenveloppeformulaireconsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idenveloppeformulaireconsultation['max'])) {
                $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::IDENVELOPPEFORMULAIRECONSULTATION, $idenveloppeformulaireconsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::IDENVELOPPEFORMULAIRECONSULTATION, $idenveloppeformulaireconsultation, $comparison);
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
     * @return CommonEnveloppeItemFormulaireConsultationValuesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::VALEUR, $valeur, $comparison);
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
     * @return CommonEnveloppeItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function filterByTypeValeur($typeValeur = null, $comparison = null)
    {
        if (is_array($typeValeur)) {
            $useMinMax = false;
            if (isset($typeValeur['min'])) {
                $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::TYPE_VALEUR, $typeValeur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeValeur['max'])) {
                $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::TYPE_VALEUR, $typeValeur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::TYPE_VALEUR, $typeValeur, $comparison);
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
     * @return CommonEnveloppeItemFormulaireConsultationValuesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::PRECISION_ENTREPRISE, $precisionEntreprise, $comparison);
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
     * @return CommonEnveloppeItemFormulaireConsultationValuesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::PRIX_UNITAIRE, $prixUnitaire, $comparison);
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
     * @return CommonEnveloppeItemFormulaireConsultationValuesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::TVA, $tva, $comparison);
    }

    /**
     * Filter the query by a related CommonItemFormulaireConsultation object
     *
     * @param   CommonItemFormulaireConsultation|PropelObjectCollection $commonItemFormulaireConsultation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEnveloppeItemFormulaireConsultationValuesQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonItemFormulaireConsultation($commonItemFormulaireConsultation, $comparison = null)
    {
        if ($commonItemFormulaireConsultation instanceof CommonItemFormulaireConsultation) {
            return $this
                ->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::IDITEMFORMULAIRECONSULTATION, $commonItemFormulaireConsultation->getId(), $comparison);
        } elseif ($commonItemFormulaireConsultation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::IDITEMFORMULAIRECONSULTATION, $commonItemFormulaireConsultation->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonItemFormulaireConsultation() only accepts arguments of type CommonItemFormulaireConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonItemFormulaireConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEnveloppeItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function joinCommonItemFormulaireConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonItemFormulaireConsultation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonItemFormulaireConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonItemFormulaireConsultation relation CommonItemFormulaireConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonItemFormulaireConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonItemFormulaireConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonItemFormulaireConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonItemFormulaireConsultation', 'CommonItemFormulaireConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEnveloppeItemFormulaireConsultationValues $commonEnveloppeItemFormulaireConsultationValues Object to remove from the list of results
     *
     * @return CommonEnveloppeItemFormulaireConsultationValuesQuery The current query, for fluid interface
     */
    public function prune($commonEnveloppeItemFormulaireConsultationValues = null)
    {
        if ($commonEnveloppeItemFormulaireConsultationValues) {
            $this->addUsingAlias(CommonEnveloppeItemFormulaireConsultationValuesPeer::ID, $commonEnveloppeItemFormulaireConsultationValues->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
