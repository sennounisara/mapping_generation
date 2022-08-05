<?php


/**
 * Base class that represents a query for the 'ItemFormulaire' table.
 *
 * 
 *
 * @method CommonItemFormulaireQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonItemFormulaireQuery orderByIdmodeleformulaire($order = Criteria::ASC) Order by the idModeleFormulaire column
 * @method CommonItemFormulaireQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonItemFormulaireQuery orderByCommentaireAcheteur($order = Criteria::ASC) Order by the commentaire_acheteur column
 * @method CommonItemFormulaireQuery orderByPrixUnitaire($order = Criteria::ASC) Order by the prix_unitaire column
 * @method CommonItemFormulaireQuery orderByQuantite($order = Criteria::ASC) Order by the quantite column
 * @method CommonItemFormulaireQuery orderByPrecisionEntreprise($order = Criteria::ASC) Order by the precision_entreprise column
 * @method CommonItemFormulaireQuery orderByTypeReponse($order = Criteria::ASC) Order by the type_reponse column
 * @method CommonItemFormulaireQuery orderByObligatoire($order = Criteria::ASC) Order by the obligatoire column
 * @method CommonItemFormulaireQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 *
 * @method CommonItemFormulaireQuery groupById() Group by the id column
 * @method CommonItemFormulaireQuery groupByIdmodeleformulaire() Group by the idModeleFormulaire column
 * @method CommonItemFormulaireQuery groupByLibelle() Group by the libelle column
 * @method CommonItemFormulaireQuery groupByCommentaireAcheteur() Group by the commentaire_acheteur column
 * @method CommonItemFormulaireQuery groupByPrixUnitaire() Group by the prix_unitaire column
 * @method CommonItemFormulaireQuery groupByQuantite() Group by the quantite column
 * @method CommonItemFormulaireQuery groupByPrecisionEntreprise() Group by the precision_entreprise column
 * @method CommonItemFormulaireQuery groupByTypeReponse() Group by the type_reponse column
 * @method CommonItemFormulaireQuery groupByObligatoire() Group by the obligatoire column
 * @method CommonItemFormulaireQuery groupByNumero() Group by the numero column
 *
 * @method CommonItemFormulaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonItemFormulaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonItemFormulaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonItemFormulaire findOne(PropelPDO $con = null) Return the first CommonItemFormulaire matching the query
 * @method CommonItemFormulaire findOneOrCreate(PropelPDO $con = null) Return the first CommonItemFormulaire matching the query, or a new CommonItemFormulaire object populated from the query conditions when no match is found
 *
 * @method CommonItemFormulaire findOneByIdmodeleformulaire(int $idModeleFormulaire) Return the first CommonItemFormulaire filtered by the idModeleFormulaire column
 * @method CommonItemFormulaire findOneByLibelle(string $libelle) Return the first CommonItemFormulaire filtered by the libelle column
 * @method CommonItemFormulaire findOneByCommentaireAcheteur(string $commentaire_acheteur) Return the first CommonItemFormulaire filtered by the commentaire_acheteur column
 * @method CommonItemFormulaire findOneByPrixUnitaire(string $prix_unitaire) Return the first CommonItemFormulaire filtered by the prix_unitaire column
 * @method CommonItemFormulaire findOneByQuantite(string $quantite) Return the first CommonItemFormulaire filtered by the quantite column
 * @method CommonItemFormulaire findOneByPrecisionEntreprise(int $precision_entreprise) Return the first CommonItemFormulaire filtered by the precision_entreprise column
 * @method CommonItemFormulaire findOneByTypeReponse(string $type_reponse) Return the first CommonItemFormulaire filtered by the type_reponse column
 * @method CommonItemFormulaire findOneByObligatoire(string $obligatoire) Return the first CommonItemFormulaire filtered by the obligatoire column
 * @method CommonItemFormulaire findOneByNumero(int $numero) Return the first CommonItemFormulaire filtered by the numero column
 *
 * @method array findById(int $id) Return CommonItemFormulaire objects filtered by the id column
 * @method array findByIdmodeleformulaire(int $idModeleFormulaire) Return CommonItemFormulaire objects filtered by the idModeleFormulaire column
 * @method array findByLibelle(string $libelle) Return CommonItemFormulaire objects filtered by the libelle column
 * @method array findByCommentaireAcheteur(string $commentaire_acheteur) Return CommonItemFormulaire objects filtered by the commentaire_acheteur column
 * @method array findByPrixUnitaire(string $prix_unitaire) Return CommonItemFormulaire objects filtered by the prix_unitaire column
 * @method array findByQuantite(string $quantite) Return CommonItemFormulaire objects filtered by the quantite column
 * @method array findByPrecisionEntreprise(int $precision_entreprise) Return CommonItemFormulaire objects filtered by the precision_entreprise column
 * @method array findByTypeReponse(string $type_reponse) Return CommonItemFormulaire objects filtered by the type_reponse column
 * @method array findByObligatoire(string $obligatoire) Return CommonItemFormulaire objects filtered by the obligatoire column
 * @method array findByNumero(int $numero) Return CommonItemFormulaire objects filtered by the numero column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonItemFormulaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonItemFormulaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonItemFormulaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonItemFormulaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonItemFormulaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonItemFormulaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonItemFormulaireQuery) {
            return $criteria;
        }
        $query = new CommonItemFormulaireQuery();
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
     * @return   CommonItemFormulaire|CommonItemFormulaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonItemFormulairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonItemFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonItemFormulaire A model object, or null if the key is not found
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
     * @return                 CommonItemFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idModeleFormulaire`, `libelle`, `commentaire_acheteur`, `prix_unitaire`, `quantite`, `precision_entreprise`, `type_reponse`, `obligatoire`, `numero` FROM `ItemFormulaire` WHERE `id` = :p0';
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
            $obj = new CommonItemFormulaire();
            $obj->hydrate($row);
            CommonItemFormulairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonItemFormulaire|CommonItemFormulaire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonItemFormulaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonItemFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonItemFormulairePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonItemFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonItemFormulairePeer::ID, $keys, Criteria::IN);
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
     * @return CommonItemFormulaireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonItemFormulairePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonItemFormulairePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemFormulairePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the idModeleFormulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmodeleformulaire(1234); // WHERE idModeleFormulaire = 1234
     * $query->filterByIdmodeleformulaire(array(12, 34)); // WHERE idModeleFormulaire IN (12, 34)
     * $query->filterByIdmodeleformulaire(array('min' => 12)); // WHERE idModeleFormulaire >= 12
     * $query->filterByIdmodeleformulaire(array('max' => 12)); // WHERE idModeleFormulaire <= 12
     * </code>
     *
     * @param     mixed $idmodeleformulaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdmodeleformulaire($idmodeleformulaire = null, $comparison = null)
    {
        if (is_array($idmodeleformulaire)) {
            $useMinMax = false;
            if (isset($idmodeleformulaire['min'])) {
                $this->addUsingAlias(CommonItemFormulairePeer::IDMODELEFORMULAIRE, $idmodeleformulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmodeleformulaire['max'])) {
                $this->addUsingAlias(CommonItemFormulairePeer::IDMODELEFORMULAIRE, $idmodeleformulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemFormulairePeer::IDMODELEFORMULAIRE, $idmodeleformulaire, $comparison);
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
     * @return CommonItemFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonItemFormulairePeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonItemFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonItemFormulairePeer::COMMENTAIRE_ACHETEUR, $commentaireAcheteur, $comparison);
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
     * @return CommonItemFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonItemFormulairePeer::PRIX_UNITAIRE, $prixUnitaire, $comparison);
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
     * @return CommonItemFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonItemFormulairePeer::QUANTITE, $quantite, $comparison);
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
     * @return CommonItemFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrecisionEntreprise($precisionEntreprise = null, $comparison = null)
    {
        if (is_array($precisionEntreprise)) {
            $useMinMax = false;
            if (isset($precisionEntreprise['min'])) {
                $this->addUsingAlias(CommonItemFormulairePeer::PRECISION_ENTREPRISE, $precisionEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($precisionEntreprise['max'])) {
                $this->addUsingAlias(CommonItemFormulairePeer::PRECISION_ENTREPRISE, $precisionEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemFormulairePeer::PRECISION_ENTREPRISE, $precisionEntreprise, $comparison);
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
     * @return CommonItemFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonItemFormulairePeer::TYPE_REPONSE, $typeReponse, $comparison);
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
     * @return CommonItemFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonItemFormulairePeer::OBLIGATOIRE, $obligatoire, $comparison);
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
     * @return CommonItemFormulaireQuery The current query, for fluid interface
     */
    public function filterByNumero($numero = null, $comparison = null)
    {
        if (is_array($numero)) {
            $useMinMax = false;
            if (isset($numero['min'])) {
                $this->addUsingAlias(CommonItemFormulairePeer::NUMERO, $numero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numero['max'])) {
                $this->addUsingAlias(CommonItemFormulairePeer::NUMERO, $numero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemFormulairePeer::NUMERO, $numero, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonItemFormulaire $commonItemFormulaire Object to remove from the list of results
     *
     * @return CommonItemFormulaireQuery The current query, for fluid interface
     */
    public function prune($commonItemFormulaire = null)
    {
        if ($commonItemFormulaire) {
            $this->addUsingAlias(CommonItemFormulairePeer::ID, $commonItemFormulaire->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
