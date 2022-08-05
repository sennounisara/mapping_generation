<?php


/**
 * Base class that represents a query for the 'Prestation' table.
 *
 * 
 *
 * @method CommonPrestationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonPrestationQuery orderByNumMarche($order = Criteria::ASC) Order by the num_marche column
 * @method CommonPrestationQuery orderByTypeProcedure($order = Criteria::ASC) Order by the type_procedure column
 * @method CommonPrestationQuery orderByObjet($order = Criteria::ASC) Order by the objet column
 * @method CommonPrestationQuery orderByMontant($order = Criteria::ASC) Order by the montant column
 * @method CommonPrestationQuery orderByMaitreOuvrage($order = Criteria::ASC) Order by the maitre_ouvrage column
 * @method CommonPrestationQuery orderByDateDebutExecution($order = Criteria::ASC) Order by the date_debut_execution column
 * @method CommonPrestationQuery orderByDateFinExecution($order = Criteria::ASC) Order by the date_fin_execution column
 * @method CommonPrestationQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 *
 * @method CommonPrestationQuery groupById() Group by the id column
 * @method CommonPrestationQuery groupByNumMarche() Group by the num_marche column
 * @method CommonPrestationQuery groupByTypeProcedure() Group by the type_procedure column
 * @method CommonPrestationQuery groupByObjet() Group by the objet column
 * @method CommonPrestationQuery groupByMontant() Group by the montant column
 * @method CommonPrestationQuery groupByMaitreOuvrage() Group by the maitre_ouvrage column
 * @method CommonPrestationQuery groupByDateDebutExecution() Group by the date_debut_execution column
 * @method CommonPrestationQuery groupByDateFinExecution() Group by the date_fin_execution column
 * @method CommonPrestationQuery groupByIdEntreprise() Group by the id_entreprise column
 *
 * @method CommonPrestationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonPrestationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonPrestationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonPrestation findOne(PropelPDO $con = null) Return the first CommonPrestation matching the query
 * @method CommonPrestation findOneOrCreate(PropelPDO $con = null) Return the first CommonPrestation matching the query, or a new CommonPrestation object populated from the query conditions when no match is found
 *
 * @method CommonPrestation findOneByNumMarche(string $num_marche) Return the first CommonPrestation filtered by the num_marche column
 * @method CommonPrestation findOneByTypeProcedure(int $type_procedure) Return the first CommonPrestation filtered by the type_procedure column
 * @method CommonPrestation findOneByObjet(string $objet) Return the first CommonPrestation filtered by the objet column
 * @method CommonPrestation findOneByMontant(string $montant) Return the first CommonPrestation filtered by the montant column
 * @method CommonPrestation findOneByMaitreOuvrage(string $maitre_ouvrage) Return the first CommonPrestation filtered by the maitre_ouvrage column
 * @method CommonPrestation findOneByDateDebutExecution(string $date_debut_execution) Return the first CommonPrestation filtered by the date_debut_execution column
 * @method CommonPrestation findOneByDateFinExecution(string $date_fin_execution) Return the first CommonPrestation filtered by the date_fin_execution column
 * @method CommonPrestation findOneByIdEntreprise(int $id_entreprise) Return the first CommonPrestation filtered by the id_entreprise column
 *
 * @method array findById(int $id) Return CommonPrestation objects filtered by the id column
 * @method array findByNumMarche(string $num_marche) Return CommonPrestation objects filtered by the num_marche column
 * @method array findByTypeProcedure(int $type_procedure) Return CommonPrestation objects filtered by the type_procedure column
 * @method array findByObjet(string $objet) Return CommonPrestation objects filtered by the objet column
 * @method array findByMontant(string $montant) Return CommonPrestation objects filtered by the montant column
 * @method array findByMaitreOuvrage(string $maitre_ouvrage) Return CommonPrestation objects filtered by the maitre_ouvrage column
 * @method array findByDateDebutExecution(string $date_debut_execution) Return CommonPrestation objects filtered by the date_debut_execution column
 * @method array findByDateFinExecution(string $date_fin_execution) Return CommonPrestation objects filtered by the date_fin_execution column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonPrestation objects filtered by the id_entreprise column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonPrestationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonPrestationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonPrestation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonPrestationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonPrestationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonPrestationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonPrestationQuery) {
            return $criteria;
        }
        $query = new CommonPrestationQuery();
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
     * @return   CommonPrestation|CommonPrestation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonPrestationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonPrestationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonPrestation A model object, or null if the key is not found
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
     * @return                 CommonPrestation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `num_marche`, `type_procedure`, `objet`, `montant`, `maitre_ouvrage`, `date_debut_execution`, `date_fin_execution`, `id_entreprise` FROM `Prestation` WHERE `id` = :p0';
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
            $obj = new CommonPrestation();
            $obj->hydrate($row);
            CommonPrestationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonPrestation|CommonPrestation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonPrestation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonPrestationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonPrestationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonPrestationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonPrestationPeer::ID, $keys, Criteria::IN);
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
     * @return CommonPrestationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonPrestationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonPrestationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPrestationPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the num_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByNumMarche('fooValue');   // WHERE num_marche = 'fooValue'
     * $query->filterByNumMarche('%fooValue%'); // WHERE num_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPrestationQuery The current query, for fluid interface
     */
    public function filterByNumMarche($numMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numMarche)) {
                $numMarche = str_replace('*', '%', $numMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPrestationPeer::NUM_MARCHE, $numMarche, $comparison);
    }

    /**
     * Filter the query on the type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeProcedure(1234); // WHERE type_procedure = 1234
     * $query->filterByTypeProcedure(array(12, 34)); // WHERE type_procedure IN (12, 34)
     * $query->filterByTypeProcedure(array('min' => 12)); // WHERE type_procedure >= 12
     * $query->filterByTypeProcedure(array('max' => 12)); // WHERE type_procedure <= 12
     * </code>
     *
     * @param     mixed $typeProcedure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPrestationQuery The current query, for fluid interface
     */
    public function filterByTypeProcedure($typeProcedure = null, $comparison = null)
    {
        if (is_array($typeProcedure)) {
            $useMinMax = false;
            if (isset($typeProcedure['min'])) {
                $this->addUsingAlias(CommonPrestationPeer::TYPE_PROCEDURE, $typeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeProcedure['max'])) {
                $this->addUsingAlias(CommonPrestationPeer::TYPE_PROCEDURE, $typeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPrestationPeer::TYPE_PROCEDURE, $typeProcedure, $comparison);
    }

    /**
     * Filter the query on the objet column
     *
     * Example usage:
     * <code>
     * $query->filterByObjet('fooValue');   // WHERE objet = 'fooValue'
     * $query->filterByObjet('%fooValue%'); // WHERE objet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPrestationQuery The current query, for fluid interface
     */
    public function filterByObjet($objet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objet)) {
                $objet = str_replace('*', '%', $objet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPrestationPeer::OBJET, $objet, $comparison);
    }

    /**
     * Filter the query on the montant column
     *
     * Example usage:
     * <code>
     * $query->filterByMontant('fooValue');   // WHERE montant = 'fooValue'
     * $query->filterByMontant('%fooValue%'); // WHERE montant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPrestationQuery The current query, for fluid interface
     */
    public function filterByMontant($montant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montant)) {
                $montant = str_replace('*', '%', $montant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPrestationPeer::MONTANT, $montant, $comparison);
    }

    /**
     * Filter the query on the maitre_ouvrage column
     *
     * Example usage:
     * <code>
     * $query->filterByMaitreOuvrage('fooValue');   // WHERE maitre_ouvrage = 'fooValue'
     * $query->filterByMaitreOuvrage('%fooValue%'); // WHERE maitre_ouvrage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maitreOuvrage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPrestationQuery The current query, for fluid interface
     */
    public function filterByMaitreOuvrage($maitreOuvrage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maitreOuvrage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $maitreOuvrage)) {
                $maitreOuvrage = str_replace('*', '%', $maitreOuvrage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPrestationPeer::MAITRE_OUVRAGE, $maitreOuvrage, $comparison);
    }

    /**
     * Filter the query on the date_debut_execution column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDebutExecution('fooValue');   // WHERE date_debut_execution = 'fooValue'
     * $query->filterByDateDebutExecution('%fooValue%'); // WHERE date_debut_execution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateDebutExecution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPrestationQuery The current query, for fluid interface
     */
    public function filterByDateDebutExecution($dateDebutExecution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateDebutExecution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateDebutExecution)) {
                $dateDebutExecution = str_replace('*', '%', $dateDebutExecution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPrestationPeer::DATE_DEBUT_EXECUTION, $dateDebutExecution, $comparison);
    }

    /**
     * Filter the query on the date_fin_execution column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFinExecution('fooValue');   // WHERE date_fin_execution = 'fooValue'
     * $query->filterByDateFinExecution('%fooValue%'); // WHERE date_fin_execution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFinExecution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPrestationQuery The current query, for fluid interface
     */
    public function filterByDateFinExecution($dateFinExecution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFinExecution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFinExecution)) {
                $dateFinExecution = str_replace('*', '%', $dateFinExecution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPrestationPeer::DATE_FIN_EXECUTION, $dateFinExecution, $comparison);
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
     * @return CommonPrestationQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonPrestationPeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonPrestationPeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPrestationPeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonPrestation $commonPrestation Object to remove from the list of results
     *
     * @return CommonPrestationQuery The current query, for fluid interface
     */
    public function prune($commonPrestation = null)
    {
        if ($commonPrestation) {
            $this->addUsingAlias(CommonPrestationPeer::ID, $commonPrestation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
