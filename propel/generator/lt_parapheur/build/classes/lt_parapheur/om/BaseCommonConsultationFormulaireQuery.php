<?php


/**
 * Base class that represents a query for the 'ConsultationFormulaire' table.
 *
 * 
 *
 * @method CommonConsultationFormulaireQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonConsultationFormulaireQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method CommonConsultationFormulaireQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonConsultationFormulaireQuery orderByTypeFormulaire($order = Criteria::ASC) Order by the type_formulaire column
 * @method CommonConsultationFormulaireQuery orderByIdTypeProcedure($order = Criteria::ASC) Order by the id_type_procedure column
 * @method CommonConsultationFormulaireQuery orderByIdCategorie($order = Criteria::ASC) Order by the id_categorie column
 * @method CommonConsultationFormulaireQuery orderByCodeCpv1($order = Criteria::ASC) Order by the code_cpv_1 column
 * @method CommonConsultationFormulaireQuery orderByCodeCpv2($order = Criteria::ASC) Order by the code_cpv_2 column
 * @method CommonConsultationFormulaireQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonConsultationFormulaireQuery orderByServiceId($order = Criteria::ASC) Order by the service_id column
 * @method CommonConsultationFormulaireQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonConsultationFormulaireQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonConsultationFormulaireQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonConsultationFormulaireQuery orderByTypeEnveloppe($order = Criteria::ASC) Order by the type_enveloppe column
 * @method CommonConsultationFormulaireQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonConsultationFormulaireQuery orderByIdModele($order = Criteria::ASC) Order by the id_modele column
 * @method CommonConsultationFormulaireQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 *
 * @method CommonConsultationFormulaireQuery groupById() Group by the id column
 * @method CommonConsultationFormulaireQuery groupByReference() Group by the reference column
 * @method CommonConsultationFormulaireQuery groupByNom() Group by the nom column
 * @method CommonConsultationFormulaireQuery groupByTypeFormulaire() Group by the type_formulaire column
 * @method CommonConsultationFormulaireQuery groupByIdTypeProcedure() Group by the id_type_procedure column
 * @method CommonConsultationFormulaireQuery groupByIdCategorie() Group by the id_categorie column
 * @method CommonConsultationFormulaireQuery groupByCodeCpv1() Group by the code_cpv_1 column
 * @method CommonConsultationFormulaireQuery groupByCodeCpv2() Group by the code_cpv_2 column
 * @method CommonConsultationFormulaireQuery groupByOrganisme() Group by the organisme column
 * @method CommonConsultationFormulaireQuery groupByServiceId() Group by the service_id column
 * @method CommonConsultationFormulaireQuery groupByDateCreation() Group by the date_creation column
 * @method CommonConsultationFormulaireQuery groupByDateModification() Group by the date_modification column
 * @method CommonConsultationFormulaireQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonConsultationFormulaireQuery groupByTypeEnveloppe() Group by the type_enveloppe column
 * @method CommonConsultationFormulaireQuery groupByLot() Group by the lot column
 * @method CommonConsultationFormulaireQuery groupByIdModele() Group by the id_modele column
 * @method CommonConsultationFormulaireQuery groupByStatut() Group by the statut column
 *
 * @method CommonConsultationFormulaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonConsultationFormulaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonConsultationFormulaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonConsultationFormulaire findOne(PropelPDO $con = null) Return the first CommonConsultationFormulaire matching the query
 * @method CommonConsultationFormulaire findOneOrCreate(PropelPDO $con = null) Return the first CommonConsultationFormulaire matching the query, or a new CommonConsultationFormulaire object populated from the query conditions when no match is found
 *
 * @method CommonConsultationFormulaire findOneByReference(string $reference) Return the first CommonConsultationFormulaire filtered by the reference column
 * @method CommonConsultationFormulaire findOneByNom(string $nom) Return the first CommonConsultationFormulaire filtered by the nom column
 * @method CommonConsultationFormulaire findOneByTypeFormulaire(int $type_formulaire) Return the first CommonConsultationFormulaire filtered by the type_formulaire column
 * @method CommonConsultationFormulaire findOneByIdTypeProcedure(int $id_type_procedure) Return the first CommonConsultationFormulaire filtered by the id_type_procedure column
 * @method CommonConsultationFormulaire findOneByIdCategorie(int $id_categorie) Return the first CommonConsultationFormulaire filtered by the id_categorie column
 * @method CommonConsultationFormulaire findOneByCodeCpv1(string $code_cpv_1) Return the first CommonConsultationFormulaire filtered by the code_cpv_1 column
 * @method CommonConsultationFormulaire findOneByCodeCpv2(string $code_cpv_2) Return the first CommonConsultationFormulaire filtered by the code_cpv_2 column
 * @method CommonConsultationFormulaire findOneByOrganisme(string $organisme) Return the first CommonConsultationFormulaire filtered by the organisme column
 * @method CommonConsultationFormulaire findOneByServiceId(int $service_id) Return the first CommonConsultationFormulaire filtered by the service_id column
 * @method CommonConsultationFormulaire findOneByDateCreation(string $date_creation) Return the first CommonConsultationFormulaire filtered by the date_creation column
 * @method CommonConsultationFormulaire findOneByDateModification(string $date_modification) Return the first CommonConsultationFormulaire filtered by the date_modification column
 * @method CommonConsultationFormulaire findOneByConsultationRef(int $consultation_ref) Return the first CommonConsultationFormulaire filtered by the consultation_ref column
 * @method CommonConsultationFormulaire findOneByTypeEnveloppe(int $type_enveloppe) Return the first CommonConsultationFormulaire filtered by the type_enveloppe column
 * @method CommonConsultationFormulaire findOneByLot(int $lot) Return the first CommonConsultationFormulaire filtered by the lot column
 * @method CommonConsultationFormulaire findOneByIdModele(int $id_modele) Return the first CommonConsultationFormulaire filtered by the id_modele column
 * @method CommonConsultationFormulaire findOneByStatut(int $statut) Return the first CommonConsultationFormulaire filtered by the statut column
 *
 * @method array findById(int $id) Return CommonConsultationFormulaire objects filtered by the id column
 * @method array findByReference(string $reference) Return CommonConsultationFormulaire objects filtered by the reference column
 * @method array findByNom(string $nom) Return CommonConsultationFormulaire objects filtered by the nom column
 * @method array findByTypeFormulaire(int $type_formulaire) Return CommonConsultationFormulaire objects filtered by the type_formulaire column
 * @method array findByIdTypeProcedure(int $id_type_procedure) Return CommonConsultationFormulaire objects filtered by the id_type_procedure column
 * @method array findByIdCategorie(int $id_categorie) Return CommonConsultationFormulaire objects filtered by the id_categorie column
 * @method array findByCodeCpv1(string $code_cpv_1) Return CommonConsultationFormulaire objects filtered by the code_cpv_1 column
 * @method array findByCodeCpv2(string $code_cpv_2) Return CommonConsultationFormulaire objects filtered by the code_cpv_2 column
 * @method array findByOrganisme(string $organisme) Return CommonConsultationFormulaire objects filtered by the organisme column
 * @method array findByServiceId(int $service_id) Return CommonConsultationFormulaire objects filtered by the service_id column
 * @method array findByDateCreation(string $date_creation) Return CommonConsultationFormulaire objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonConsultationFormulaire objects filtered by the date_modification column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonConsultationFormulaire objects filtered by the consultation_ref column
 * @method array findByTypeEnveloppe(int $type_enveloppe) Return CommonConsultationFormulaire objects filtered by the type_enveloppe column
 * @method array findByLot(int $lot) Return CommonConsultationFormulaire objects filtered by the lot column
 * @method array findByIdModele(int $id_modele) Return CommonConsultationFormulaire objects filtered by the id_modele column
 * @method array findByStatut(int $statut) Return CommonConsultationFormulaire objects filtered by the statut column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonConsultationFormulaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonConsultationFormulaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonConsultationFormulaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonConsultationFormulaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonConsultationFormulaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonConsultationFormulaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonConsultationFormulaireQuery) {
            return $criteria;
        }
        $query = new CommonConsultationFormulaireQuery();
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
     * @return   CommonConsultationFormulaire|CommonConsultationFormulaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonConsultationFormulairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonConsultationFormulaire A model object, or null if the key is not found
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
     * @return                 CommonConsultationFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `reference`, `nom`, `type_formulaire`, `id_type_procedure`, `id_categorie`, `code_cpv_1`, `code_cpv_2`, `organisme`, `service_id`, `date_creation`, `date_modification`, `consultation_ref`, `type_enveloppe`, `lot`, `id_modele`, `statut` FROM `ConsultationFormulaire` WHERE `id` = :p0';
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
            $obj = new CommonConsultationFormulaire();
            $obj->hydrate($row);
            CommonConsultationFormulairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonConsultationFormulaire|CommonConsultationFormulaire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonConsultationFormulaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonConsultationFormulairePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonConsultationFormulairePeer::ID, $keys, Criteria::IN);
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
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationFormulairePeer::ID, $id, $comparison);
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
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConsultationFormulairePeer::REFERENCE, $reference, $comparison);
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
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConsultationFormulairePeer::NOM, $nom, $comparison);
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
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
     */
    public function filterByTypeFormulaire($typeFormulaire = null, $comparison = null)
    {
        if (is_array($typeFormulaire)) {
            $useMinMax = false;
            if (isset($typeFormulaire['min'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::TYPE_FORMULAIRE, $typeFormulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeFormulaire['max'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::TYPE_FORMULAIRE, $typeFormulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationFormulairePeer::TYPE_FORMULAIRE, $typeFormulaire, $comparison);
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
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedure($idTypeProcedure = null, $comparison = null)
    {
        if (is_array($idTypeProcedure)) {
            $useMinMax = false;
            if (isset($idTypeProcedure['min'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedure['max'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationFormulairePeer::ID_TYPE_PROCEDURE, $idTypeProcedure, $comparison);
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
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdCategorie($idCategorie = null, $comparison = null)
    {
        if (is_array($idCategorie)) {
            $useMinMax = false;
            if (isset($idCategorie['min'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::ID_CATEGORIE, $idCategorie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCategorie['max'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::ID_CATEGORIE, $idCategorie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationFormulairePeer::ID_CATEGORIE, $idCategorie, $comparison);
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
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConsultationFormulairePeer::CODE_CPV_1, $codeCpv1, $comparison);
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
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConsultationFormulairePeer::CODE_CPV_2, $codeCpv2, $comparison);
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
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConsultationFormulairePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
     */
    public function filterByServiceId($serviceId = null, $comparison = null)
    {
        if (is_array($serviceId)) {
            $useMinMax = false;
            if (isset($serviceId['min'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::SERVICE_ID, $serviceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceId['max'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::SERVICE_ID, $serviceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationFormulairePeer::SERVICE_ID, $serviceId, $comparison);
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
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConsultationFormulairePeer::DATE_CREATION, $dateCreation, $comparison);
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
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConsultationFormulairePeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationFormulairePeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the type_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEnveloppe(1234); // WHERE type_enveloppe = 1234
     * $query->filterByTypeEnveloppe(array(12, 34)); // WHERE type_enveloppe IN (12, 34)
     * $query->filterByTypeEnveloppe(array('min' => 12)); // WHERE type_enveloppe >= 12
     * $query->filterByTypeEnveloppe(array('max' => 12)); // WHERE type_enveloppe <= 12
     * </code>
     *
     * @param     mixed $typeEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
     */
    public function filterByTypeEnveloppe($typeEnveloppe = null, $comparison = null)
    {
        if (is_array($typeEnveloppe)) {
            $useMinMax = false;
            if (isset($typeEnveloppe['min'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::TYPE_ENVELOPPE, $typeEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeEnveloppe['max'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::TYPE_ENVELOPPE, $typeEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationFormulairePeer::TYPE_ENVELOPPE, $typeEnveloppe, $comparison);
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
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationFormulairePeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the id_modele column
     *
     * Example usage:
     * <code>
     * $query->filterByIdModele(1234); // WHERE id_modele = 1234
     * $query->filterByIdModele(array(12, 34)); // WHERE id_modele IN (12, 34)
     * $query->filterByIdModele(array('min' => 12)); // WHERE id_modele >= 12
     * $query->filterByIdModele(array('max' => 12)); // WHERE id_modele <= 12
     * </code>
     *
     * @param     mixed $idModele The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdModele($idModele = null, $comparison = null)
    {
        if (is_array($idModele)) {
            $useMinMax = false;
            if (isset($idModele['min'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::ID_MODELE, $idModele['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idModele['max'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::ID_MODELE, $idModele['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationFormulairePeer::ID_MODELE, $idModele, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut(1234); // WHERE statut = 1234
     * $query->filterByStatut(array(12, 34)); // WHERE statut IN (12, 34)
     * $query->filterByStatut(array('min' => 12)); // WHERE statut >= 12
     * $query->filterByStatut(array('max' => 12)); // WHERE statut <= 12
     * </code>
     *
     * @param     mixed $statut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonConsultationFormulairePeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationFormulairePeer::STATUT, $statut, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonConsultationFormulaire $commonConsultationFormulaire Object to remove from the list of results
     *
     * @return CommonConsultationFormulaireQuery The current query, for fluid interface
     */
    public function prune($commonConsultationFormulaire = null)
    {
        if ($commonConsultationFormulaire) {
            $this->addUsingAlias(CommonConsultationFormulairePeer::ID, $commonConsultationFormulaire->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
