<?php


/**
 * Base class that represents a query for the 'ItemFormulaireConsultation' table.
 *
 * 
 *
 * @method CommonItemFormulaireConsultationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonItemFormulaireConsultationQuery orderByIdformulaireconsultation($order = Criteria::ASC) Order by the idFormulaireConsultation column
 * @method CommonItemFormulaireConsultationQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonItemFormulaireConsultationQuery orderByCommentaireAcheteur($order = Criteria::ASC) Order by the commentaire_acheteur column
 * @method CommonItemFormulaireConsultationQuery orderByPrixUnitaire($order = Criteria::ASC) Order by the prix_unitaire column
 * @method CommonItemFormulaireConsultationQuery orderByQuantite($order = Criteria::ASC) Order by the quantite column
 * @method CommonItemFormulaireConsultationQuery orderByPrecisionEntreprise($order = Criteria::ASC) Order by the precision_entreprise column
 * @method CommonItemFormulaireConsultationQuery orderByTypeReponse($order = Criteria::ASC) Order by the type_reponse column
 * @method CommonItemFormulaireConsultationQuery orderByObligatoire($order = Criteria::ASC) Order by the obligatoire column
 * @method CommonItemFormulaireConsultationQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 *
 * @method CommonItemFormulaireConsultationQuery groupById() Group by the id column
 * @method CommonItemFormulaireConsultationQuery groupByIdformulaireconsultation() Group by the idFormulaireConsultation column
 * @method CommonItemFormulaireConsultationQuery groupByLibelle() Group by the libelle column
 * @method CommonItemFormulaireConsultationQuery groupByCommentaireAcheteur() Group by the commentaire_acheteur column
 * @method CommonItemFormulaireConsultationQuery groupByPrixUnitaire() Group by the prix_unitaire column
 * @method CommonItemFormulaireConsultationQuery groupByQuantite() Group by the quantite column
 * @method CommonItemFormulaireConsultationQuery groupByPrecisionEntreprise() Group by the precision_entreprise column
 * @method CommonItemFormulaireConsultationQuery groupByTypeReponse() Group by the type_reponse column
 * @method CommonItemFormulaireConsultationQuery groupByObligatoire() Group by the obligatoire column
 * @method CommonItemFormulaireConsultationQuery groupByNumero() Group by the numero column
 *
 * @method CommonItemFormulaireConsultationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonItemFormulaireConsultationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonItemFormulaireConsultationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonItemFormulaireConsultation findOne(PropelPDO $con = null) Return the first CommonItemFormulaireConsultation matching the query
 * @method CommonItemFormulaireConsultation findOneOrCreate(PropelPDO $con = null) Return the first CommonItemFormulaireConsultation matching the query, or a new CommonItemFormulaireConsultation object populated from the query conditions when no match is found
 *
 * @method CommonItemFormulaireConsultation findOneByIdformulaireconsultation(int $idFormulaireConsultation) Return the first CommonItemFormulaireConsultation filtered by the idFormulaireConsultation column
 * @method CommonItemFormulaireConsultation findOneByLibelle(string $libelle) Return the first CommonItemFormulaireConsultation filtered by the libelle column
 * @method CommonItemFormulaireConsultation findOneByCommentaireAcheteur(string $commentaire_acheteur) Return the first CommonItemFormulaireConsultation filtered by the commentaire_acheteur column
 * @method CommonItemFormulaireConsultation findOneByPrixUnitaire(string $prix_unitaire) Return the first CommonItemFormulaireConsultation filtered by the prix_unitaire column
 * @method CommonItemFormulaireConsultation findOneByQuantite(string $quantite) Return the first CommonItemFormulaireConsultation filtered by the quantite column
 * @method CommonItemFormulaireConsultation findOneByPrecisionEntreprise(int $precision_entreprise) Return the first CommonItemFormulaireConsultation filtered by the precision_entreprise column
 * @method CommonItemFormulaireConsultation findOneByTypeReponse(string $type_reponse) Return the first CommonItemFormulaireConsultation filtered by the type_reponse column
 * @method CommonItemFormulaireConsultation findOneByObligatoire(string $obligatoire) Return the first CommonItemFormulaireConsultation filtered by the obligatoire column
 * @method CommonItemFormulaireConsultation findOneByNumero(int $numero) Return the first CommonItemFormulaireConsultation filtered by the numero column
 *
 * @method array findById(int $id) Return CommonItemFormulaireConsultation objects filtered by the id column
 * @method array findByIdformulaireconsultation(int $idFormulaireConsultation) Return CommonItemFormulaireConsultation objects filtered by the idFormulaireConsultation column
 * @method array findByLibelle(string $libelle) Return CommonItemFormulaireConsultation objects filtered by the libelle column
 * @method array findByCommentaireAcheteur(string $commentaire_acheteur) Return CommonItemFormulaireConsultation objects filtered by the commentaire_acheteur column
 * @method array findByPrixUnitaire(string $prix_unitaire) Return CommonItemFormulaireConsultation objects filtered by the prix_unitaire column
 * @method array findByQuantite(string $quantite) Return CommonItemFormulaireConsultation objects filtered by the quantite column
 * @method array findByPrecisionEntreprise(int $precision_entreprise) Return CommonItemFormulaireConsultation objects filtered by the precision_entreprise column
 * @method array findByTypeReponse(string $type_reponse) Return CommonItemFormulaireConsultation objects filtered by the type_reponse column
 * @method array findByObligatoire(string $obligatoire) Return CommonItemFormulaireConsultation objects filtered by the obligatoire column
 * @method array findByNumero(int $numero) Return CommonItemFormulaireConsultation objects filtered by the numero column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonItemFormulaireConsultationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonItemFormulaireConsultationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonItemFormulaireConsultation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonItemFormulaireConsultationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonItemFormulaireConsultationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonItemFormulaireConsultationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonItemFormulaireConsultationQuery) {
            return $criteria;
        }
        $query = new CommonItemFormulaireConsultationQuery();
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
     * @return   CommonItemFormulaireConsultation|CommonItemFormulaireConsultation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonItemFormulaireConsultationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonItemFormulaireConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonItemFormulaireConsultation A model object, or null if the key is not found
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
     * @return                 CommonItemFormulaireConsultation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idFormulaireConsultation`, `libelle`, `commentaire_acheteur`, `prix_unitaire`, `quantite`, `precision_entreprise`, `type_reponse`, `obligatoire`, `numero` FROM `ItemFormulaireConsultation` WHERE `id` = :p0';
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
            $obj = new CommonItemFormulaireConsultation();
            $obj->hydrate($row);
            CommonItemFormulaireConsultationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonItemFormulaireConsultation|CommonItemFormulaireConsultation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonItemFormulaireConsultation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonItemFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonItemFormulaireConsultationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonItemFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonItemFormulaireConsultationPeer::ID, $keys, Criteria::IN);
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
     * @return CommonItemFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonItemFormulaireConsultationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonItemFormulaireConsultationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemFormulaireConsultationPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the idFormulaireConsultation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdformulaireconsultation(1234); // WHERE idFormulaireConsultation = 1234
     * $query->filterByIdformulaireconsultation(array(12, 34)); // WHERE idFormulaireConsultation IN (12, 34)
     * $query->filterByIdformulaireconsultation(array('min' => 12)); // WHERE idFormulaireConsultation >= 12
     * $query->filterByIdformulaireconsultation(array('max' => 12)); // WHERE idFormulaireConsultation <= 12
     * </code>
     *
     * @param     mixed $idformulaireconsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByIdformulaireconsultation($idformulaireconsultation = null, $comparison = null)
    {
        if (is_array($idformulaireconsultation)) {
            $useMinMax = false;
            if (isset($idformulaireconsultation['min'])) {
                $this->addUsingAlias(CommonItemFormulaireConsultationPeer::IDFORMULAIRECONSULTATION, $idformulaireconsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idformulaireconsultation['max'])) {
                $this->addUsingAlias(CommonItemFormulaireConsultationPeer::IDFORMULAIRECONSULTATION, $idformulaireconsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemFormulaireConsultationPeer::IDFORMULAIRECONSULTATION, $idformulaireconsultation, $comparison);
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
     * @return CommonItemFormulaireConsultationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonItemFormulaireConsultationPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the commentaire_acheteur column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaireAcheteur('fooValue');   // WHERE commentaire_acheteur = 'fooValue'
     * $query->filterByCommentaireAcheteur('%fooValue%'); // WHERE commentaire_acheteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaireAcheteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByCommentaireAcheteur($commentaireAcheteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaireAcheteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaireAcheteur)) {
                $commentaireAcheteur = str_replace('*', '%', $commentaireAcheteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonItemFormulaireConsultationPeer::COMMENTAIRE_ACHETEUR, $commentaireAcheteur, $comparison);
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
     * @return CommonItemFormulaireConsultationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonItemFormulaireConsultationPeer::PRIX_UNITAIRE, $prixUnitaire, $comparison);
    }

    /**
     * Filter the query on the quantite column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantite('fooValue');   // WHERE quantite = 'fooValue'
     * $query->filterByQuantite('%fooValue%'); // WHERE quantite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $quantite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByQuantite($quantite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($quantite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $quantite)) {
                $quantite = str_replace('*', '%', $quantite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonItemFormulaireConsultationPeer::QUANTITE, $quantite, $comparison);
    }

    /**
     * Filter the query on the precision_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByPrecisionEntreprise(1234); // WHERE precision_entreprise = 1234
     * $query->filterByPrecisionEntreprise(array(12, 34)); // WHERE precision_entreprise IN (12, 34)
     * $query->filterByPrecisionEntreprise(array('min' => 12)); // WHERE precision_entreprise >= 12
     * $query->filterByPrecisionEntreprise(array('max' => 12)); // WHERE precision_entreprise <= 12
     * </code>
     *
     * @param     mixed $precisionEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByPrecisionEntreprise($precisionEntreprise = null, $comparison = null)
    {
        if (is_array($precisionEntreprise)) {
            $useMinMax = false;
            if (isset($precisionEntreprise['min'])) {
                $this->addUsingAlias(CommonItemFormulaireConsultationPeer::PRECISION_ENTREPRISE, $precisionEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($precisionEntreprise['max'])) {
                $this->addUsingAlias(CommonItemFormulaireConsultationPeer::PRECISION_ENTREPRISE, $precisionEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemFormulaireConsultationPeer::PRECISION_ENTREPRISE, $precisionEntreprise, $comparison);
    }

    /**
     * Filter the query on the type_reponse column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeReponse('fooValue');   // WHERE type_reponse = 'fooValue'
     * $query->filterByTypeReponse('%fooValue%'); // WHERE type_reponse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeReponse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByTypeReponse($typeReponse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeReponse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeReponse)) {
                $typeReponse = str_replace('*', '%', $typeReponse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonItemFormulaireConsultationPeer::TYPE_REPONSE, $typeReponse, $comparison);
    }

    /**
     * Filter the query on the obligatoire column
     *
     * Example usage:
     * <code>
     * $query->filterByObligatoire('fooValue');   // WHERE obligatoire = 'fooValue'
     * $query->filterByObligatoire('%fooValue%'); // WHERE obligatoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByObligatoire($obligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligatoire)) {
                $obligatoire = str_replace('*', '%', $obligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonItemFormulaireConsultationPeer::OBLIGATOIRE, $obligatoire, $comparison);
    }

    /**
     * Filter the query on the numero column
     *
     * Example usage:
     * <code>
     * $query->filterByNumero(1234); // WHERE numero = 1234
     * $query->filterByNumero(array(12, 34)); // WHERE numero IN (12, 34)
     * $query->filterByNumero(array('min' => 12)); // WHERE numero >= 12
     * $query->filterByNumero(array('max' => 12)); // WHERE numero <= 12
     * </code>
     *
     * @param     mixed $numero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemFormulaireConsultationQuery The current query, for fluid interface
     */
    public function filterByNumero($numero = null, $comparison = null)
    {
        if (is_array($numero)) {
            $useMinMax = false;
            if (isset($numero['min'])) {
                $this->addUsingAlias(CommonItemFormulaireConsultationPeer::NUMERO, $numero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numero['max'])) {
                $this->addUsingAlias(CommonItemFormulaireConsultationPeer::NUMERO, $numero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemFormulaireConsultationPeer::NUMERO, $numero, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonItemFormulaireConsultation $commonItemFormulaireConsultation Object to remove from the list of results
     *
     * @return CommonItemFormulaireConsultationQuery The current query, for fluid interface
     */
    public function prune($commonItemFormulaireConsultation = null)
    {
        if ($commonItemFormulaireConsultation) {
            $this->addUsingAlias(CommonItemFormulaireConsultationPeer::ID, $commonItemFormulaireConsultation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
